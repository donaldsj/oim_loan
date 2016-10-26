<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\Models\Loan;
use App\Models\LoansReturn;

use Auth;
use Response;
use Validator;
use Redirect;


class LoansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        if ($user->role_id == 1) {
            $loans = DB::table('loans as l')
            ->join('customers as c', 'l.customer_id', '=', 'c.id')
            ->select('l.*', 'c.first_name', 'c.second_name', 'c.last_name', 'c.street_of_residence', 'c.phone_number')
            ->orderBy('id', 'DESC')->get();
        }
        else {
            $loans = DB::table('loans as l')
            ->join('customers as c', 'l.customer_id', '=', 'c.id')
            ->where('c.employee_id', $user->id)
            ->select('l.*', 'c.first_name', 'c.second_name', 'c.last_name', 'c.street_of_residence', 'c.phone_number')
            ->orderBy('id', 'DESC')->get();
        }
        
        return view('loans.index', ['loans' => $loans, 'user' => $user]);
       /* */
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        // return $id;
        $user = Auth::user();
        return view('loans.loan_application', compact('user','id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        $validator = Validator::make($data = $request->all(), Loan::$rules);

        $data['balance'] = 0;
        $data['loan_date'] = date('Y-m-d', strtotime($request->loan_date));
        $data['due_date'] = date('Y-m-d', strtotime($request->due_date));

        if ($validator->fails())
        {
            return Redirect::back()->withErrors($validator)->withInput();
        }

        $loan = Loan::create($data);
        if($loan){
           /* return view('loans', compact('user'));*/
           return redirect('loans');
        }
    }

    /**
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $loan = Loan::findOrFail($id);
        $user = Auth::user();

        $returns = DB::table('loans_returns as r')
                    ->join('loans as l', 'r.loan_code', '=', 'l.loan_code')
                    ->where('l.id', $id)->get();

        $tellers = DB::table('users as u')
                    ->join('loans_returns as r', 'u.id', '=', 'r.user_id')
                    ->join('loans as l', 'r.loan_code', '=', 'l.loan_code')
                    ->select('u.first_name', 'u.middle_name', 'u.last_name','l.id', 'l.loan_code')
                    ->where('l.id',$id)
                    ->get()->first();
                     
        $total_returns = DB::table('loans_returns as r')
                    ->join('loans as l', 'r.loan_code', '=', 'l.loan_code')
                    ->where('l.id', $id)->sum('r.return_amount');

        $officers = DB::table('users as u')
                    ->join('customers as c', 'u.id', '=', 'c.employee_id' )
                    ->join('loans as l', 'c.id', '=', 'l.customer_id')
                    ->select('c.first_name as fname', 'c.second_name as sname', 'c.last_name as lname', 'u.first_name', 'u.middle_name', 'u.last_name')
                    ->where('l.id', $id)->orderBy('u.id', 'DESC')->first();              
        if (!is_null($officers)) {
            $officer = $officers;
        }
        else {
            return '<p class="alert alert-warning">'."Sorry! Selected data is not accessible".'</p>';
        }

        return view('loans.loan_detail', ['loan' => $loan, 'returns'=>$returns, 'total_returns'=>$total_returns, 'officer'=>$officer, 'tellers'=>$tellers, 'user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $loan = Loan::findOrFail($id);
        $loan->delete();

        return redirect()->route('loans');
    }



    public function returnsView()
    {
       $user = Auth::user();
       $loan_codes = DB::table('loans')->select('loan_code')->where('status', '=', 0)->where('loan_code', '!=', '')->get();
          
        return view('loans.loans_return', compact('user', 'loan_codes'));
    }


    public function store_loan_return(Request $request)
    {
        $user = Auth::user();

        $validator = Validator::make($data = $request->all(), LoansReturn::$rules);

        $data['user_id'] = $user->id;
        $data['return_date'] = date('Y-m-d', strtotime($request->return_date));

        if ($validator->fails())
        {
            return Redirect::back()->withErrors($validator)->withInput();
        }

        $returns = LoansReturn::create($data);
        if($returns){
           return redirect()->route('loans');
        }
    }

    public function confirm($id)
    {
        $cID = DB::table('loans')->select('customer_id')->where('id',$id)->first()->customer_id;

        $loan_code = "IOML".$id."C".$cID;

        $row = Loan::findOrFail($id);
        $row->confirmed = 1;
        $row->loan_code = $loan_code;
        $row->save();

        return redirect()->route('loan.details', $id);

    }
}
