<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use Auth;

class DashboardController extends Controller
{
    
    public function __invoke()
    {

    	$user = Auth::user();

        if ($user->role_id == 1) {

  			$customers = DB::table('customers')->get();

            $loans = DB::table('loans as l')
                    ->join('customers as c', 'l.customer_id', '=', 'c.id')
                    ->select('l.*', 'c.first_name', 'c.second_name', 'c.last_name', 'c.phone_number')
                    ->orderBy('id', 'DESC')->paginate(8);

            $active_loan_amount = DB::table('loans')->where('status', 0)->sum('loan_amount');

            $returned = DB::table('loans_returns as r')
                    ->join('loans as l', 'r.loan_code', '=', 'l.loan_code')
                    ->join('customers as c', 'l.customer_id', '=', 'c.id' )
                    ->where('l.status', 0)->sum('r.return_amount');

            $in_loan = $active_loan_amount - $returned;

        }
        else {

        	$customers = DB::table('customers')->where('employee_id', $user->id)->get();

            $loans = DB::table('loans as l')
                    ->join('customers as c', 'l.customer_id', '=', 'c.id')
                    ->where('c.employee_id', $user->id)
                    ->select('l.*', 'c.first_name', 'c.second_name', 'c.last_name', 'c.phone_number')
                    ->orderBy('id', 'DESC')->paginate(8);

            $active_loan_amount = DB::table('loans as l')
                                ->join('customers as c', 'l.customer_id', '=', 'c.id')
                                ->where('c.employee_id', $user->id)
                                ->where('l.status', 0)->sum('l.loan_amount');

            $returned = DB::table('loans_returns as r')
                    ->join('loans as l', 'r.loan_code', '=', 'l.loan_code')
                    ->join('customers as c', 'l.customer_id', '=', 'c.id' )
                    ->where('c.employee_id', $user->id)
                    ->where('l.status', 0)->sum('r.return_amount');

            $in_loan = $active_loan_amount - $returned;


        }

        return view('dashboard.index', ['loans'=>$loans, 'active_loan_amount'=>$active_loan_amount, 'returned'=>$returned, 'in_loan'=>$in_loan, 'customers'=>$customers, 'user' => $user]);
    }
}
