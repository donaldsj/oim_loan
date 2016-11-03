@include('layouts.includes.header')

<!-- begin #content -->
		<div id="content" class="content">
			<div class="">
				<!-- begin breadcrumb -->
				<ol class="breadcrumb pull-right">
					<li><a href="javascript:;">Dashboard</a></li>
					<li><a href="javascript:;">Loan</a></li>
					<li><a href="javascript:;">Details</a></li>
				</ol>
				<!-- end breadcrumb -->

				<!-- begin page-header -->
				<h1 class="page-header">LOAN DETAILS<small></small></h1>                
				<!-- end page-header -->
			</div>
			
			<!-- begin invoice -->
			<div class="invoice">                
                    <div class="panel">
                        <h3>LOAN DETAILS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <span class="hidden-print">
                               <!--  <a href="{!! URL::to('loans') !!}" class="btn btn-sm btn-primary m-r-5 m-b-5"><i class="fa fa-arrow-left m-r-5"></i>Back to Loans list</a> -->
                            </span>
                        </h3>
                            <div class="row col-md-8">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Customer (Owner): <h4><a href="{!! route('customers.show', $officer->cID) !!}">{!! $officer->fname !!}&nbsp;{!! $officer->sname !!}&nbsp;{!! $officer->lname !!}</a></h4></th>
                                            <th>Loan Code (#): 
                                                
                                                @if(($loan->loan_code != NULL) || ($loan->loan_code != ""))
                                                    <h4>{!! $loan->loan_code !!}</h4>
                                                @elseif(Auth::user()->role_id == 1)
                                                    <h4><a href="{!! route('loan.confirm', $loan->id) !!}" class="btn btn-sm btn-warning">Confirm</a></h4>
                                                @endif
                                                
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Attending Officer: <strong>{!! $officer->first_name !!}&nbsp;{!! $officer->middle_name !!}&nbsp;{!! $officer->last_name !!}</strong></td>
                                            <td>Amount (Tsh): <strong>{!! number_format($loan->loan_amount,2,'.',',') !!}&nbsp;TZS</strong></td>
                                        </tr>
                                        <tr>
                                            <td>Borrow date: <strong>{!! date("d/m/Y", strtotime($loan->loan_date)) !!}</strong>, Due date: <strong>{!! date("d/m/Y", strtotime($loan->due_date)) !!}</strong></td>
                                            <td>Returned amount: <strong>{!! number_format($total_returns,2,'.',',') !!}&nbsp;TZS</strong></td>
                                        </tr>
                                        <tr>
                                            <td>Purpose: <strong>{!! $loan->loan_purpose !!}</strong></td>
                                            <td>Interest: <strong>{!! number_format($loan->interest,2,'.',',') !!}&nbsp;TZS</strong></td>
                                        </tr>
                                        <tr>
                                            <td>Penalty: <strong>{!! number_format($loan->penalty,2,'.',',') !!}&nbsp;TZS</strong></td>
                                            <td>Total Return Amount: <strong>{!! number_format($loan->loan_amount+$loan->interest+$loan->penalty,2,'.',',') !!}&nbsp;TZS</strong></td>
                                        </tr>
                                                                        
                                    </tbody>
                                </table>
                            <!-- </div> -->
                        
                                                
                        <div style="clear: both;"></div>
                        <h4>RETURN DETAILS</h4>
                        <!-- <div class="row col-md-8"> -->
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Amount (TZS)</th>
                                        <th>Teller</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($returns) != null)
                                        @foreach($returns as $loan_return)
                                            <tr>
                                                <td>{!! $loan_return->return_date !!}</td>
                                                <td>{!! number_format($loan_return->return_amount, 2, '.', ',') !!}</td>
                                                <td>{!! $loan_return->first_name !!}&nbsp{!! $loan_return->middle_name !!}&nbsp{!! $loan_return->last_name !!}</td>
                                                
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="4"><p class="alert alert-info">No data yet!</p></td>
                                        </tr>
                                    @endif                                
                                </tbody>
                            </table>
                        </div>
                        <div class="row col-md-4">                    
                            <div class="panel panel-default panel-bodered">
                                <div class="panel-heading">                                        
                                    <h4 class="panel-title">COMMENTS</h4>
                                </div>
                                <div class="panel-body">
                                    <div style="max-height: 200px; overflow-y: scroll;">
                                        @if(count($comments) > 0)
                                            @foreach($comments as $comment)
                                                <h5><a href="">{!! $comment->first_name !!}&nbsp;{!! $comment->middle_name !!}&nbsp;{!! $comment->last_name !!}</a> <small>{!! date('D, d M Y H:i', strtotime($comment->created_at)) !!}</small></h5>
                                                <p>{!! $comment->comments !!}</p>
                                            @endforeach
                                        @else
                                            <p class="alert alert-info">No comments for this Loan.!</p>
                                        @endif
                                        
                                    </div>

                                    <div>
                                        {!! Form::open(['action'=>'CommentsController@store', 'method'=>'POST', 'name'=>'loan_comment', 'data-parsley-validate'=>'true']) !!}
                                            {!! Form::hidden('loan',$loan->id) !!}
                                            {!! Form::hidden('officer',$user->id) !!}
                                            {!! Form::textarea('comments', null, array('rows'=>'2', 'class'=>'form-control', 'placeholder'=>'Type your comment here..')) !!}
                                            {!! Form::submit('Add Comment', array('class'=>'btn btn-sm btn-primary pull-right')) !!}
                                        {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                                 
                <div style="clear: both;"></div>
               
                <div class="invoice-footer text-muted">
                    <p class="text-center m-b-5">
                        AHSANTE KWA KUCHAGUA KUWA MTEJA WETU!
                    </p>
                    <p class="text-center">
                        <span class="m-r-10"><i class="fa fa-globe"></i>One Icon Microfinance</span>
                        <span class="m-r-10"><i class="fa fa-phone"></i>+255 713 594923</span>
                        <span class="m-r-10"><i class="fa fa-envelope"></i>donaldsj90@gmail.com</span>
                    </p>
                </div>
                <div class="row col-md-8">
                        <a href="javascript:;" onclick="window.print()" class="btn btn-sm btn-info"><i class="fa fa-print m-r-5"></i> Print</a>&nbsp;&nbsp;&nbsp;&nbsp;
                        @if(($loan->confirmed == 0) && ($loan->loan_code == ""))
                            <a href="{!! route('loan.destroy',$loan->id) !!}" class="btn btn-sm btn-danger"><i class="fa fa-trash m-r-5"></i> Delete this loan!</a>
                        @endif
                        
                </div>
                <div style="clear: both;"></div>
            </div>
			<!-- end invoice -->
		</div>
		<!-- end #content -->
@include('layouts.includes.footer')