@include('layouts.includes.header')

<!-- begin #content -->
		<div id="content" class="content">
			<div class="">
				<!-- begin breadcrumb -->
				<ol class="breadcrumb pull-right">
					<li><a href="javascript:;">Dashboard</a></li>
					<li><a href="javascript:;">Users</a></li>
					<li><a href="javascript:;">Customer</a></li>
				</ol>
				<!-- end breadcrumb -->
				<!-- begin page-header -->
				<h1 class="page-header">Customer<small></small></h1>                
				<!-- end page-header -->
			</div>
			
			<!-- begin invoice -->
			<div class="invoice">
                    <div class="table-responsive">
                        <h3>
                            {!! $customer->first_name !!}&nbsp;{!! $customer->second_name !!}&nbsp;{!! $customer->last_name !!}
                            
                        </h3>
                        <span class="pull-left hidden-print">
                            <a href="{!! URL::to('customers') !!}" class="btn btn-sm btn-primary m-r-5 m-b-5"><i class="fa fa-arrow-left m-r-5"></i>Back to customers</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="{!! URL::to('loan/application', $customer->id) !!}" class="btn btn-sm btn-warning m-b-10"><i class="fa fa-share m-r-5"></i>APPLY FOR LOAN</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="javascript:;" onclick="window.print()" class="btn btn-sm btn-success m-b-10"><i class="fa fa-print m-r-5"></i> Print</a>
                        </span>  
                        <div class="row col-md-10">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th colspan="2"><center><strong>CUSTOMER</strong></center></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Name: <strong>{!! $customer->first_name !!}&nbsp;{!! $customer->second_name !!}&nbsp;{!! $customer->last_name !!}</strong></td>
                                        <td rowspan="6"><img src="{!! asset('img/customers_photo/'.$customer->photo_url) !!}" width="" height="160px" /></td>
                                    </tr>
                                    <tr>
                                        <td>Job: <strong>{!! $customer->job !!}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Address: <strong>{!! $customer->street_of_residence !!}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Contacts: <strong>{!! $customer->phone_number !!}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Attending Officer: <strong>{!! $attending_officers->first_name !!}&nbsp;{!! $attending_officers->middle_name !!}&nbsp;{!! $attending_officers->last_name !!}</strong></td>
                                        
                                    </tr>
                                                                      
                                </tbody>
                            </table>

                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th colspan="5"><center><strong>REFEREES</strong></center></th>
                                    </tr>
                                    <tr>
                                        <th>Name&nbsp;&nbsp;&nbsp;&nbsp;<a href="{!! route('create_referee', $customer->id) !!}">+Add Referee</a> </th>
                                        <th>Job</th>
                                        <th>Address</th>
                                        <th>Contacts</th>
                                        <th>Relationship</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($referees) > 0)
                                        @foreach($referees as $refer)
                                            <tr>
                                                <td>{!! $refer->first_name !!}&nbsp;{!! $refer->second_name !!}&nbsp;{!! $refer->last_name !!}</td>
                                                <td>{!! $refer->job !!},&nbsp;{!! $refer->work_location !!}</td>
                                                <td>{!! $refer->street_of_residence !!}</td>
                                                <td>{!! $refer->phone_number !!}</td>
                                                <td>{!! $refer->relationship !!}</td>
                                            </tr>
                                        @endforeach 
                                    @else
                                        <tr>
                                            <td colspan="5"><h4 class="alert alert-warning">No Referee for this Cusomer!&nbsp;&nbsp;&nbsp;&nbsp;<a href="{!! route('create_referee', $customer->id) !!}">+Add Referee</a></h4></td>
                                        </tr>
                                    @endif                                                             
                                </tbody>
                            </table>                            
                        </div>

                        <div class="row col-md-10">
                            <h3>PREVIOUS LOAN DETAILS</h3>
                            
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>CODE</th>
                                        <th>PURPOSE</th>
                                        <th>DATE</th>
                                        <th>AMOUNT</th>
                                        <th>STATUS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($customer_loans) > 0)
                                        @foreach($customer_loans as $cust_loans) 
                                            <tr>
                                                <td><a href="{!! route('loan.details', $cust_loans->id) !!}">{!! ($cust_loans->loan_code == "")? "Not Confirmed!" : $cust_loans->loan_code !!}</a></td>
                                                <td>{!! $cust_loans->loan_purpose !!}</td>
                                                <td>{!! $cust_loans->loan_date !!}</td>
                                                <td>TSH.{!! $cust_loans->loan_amount !!}</td>
                                                <td>{!! ($cust_loans->status == 0)? "Open" : "Closed" !!}</td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="5"><h4 class="alert alert-success">This Cusomer does not have any previous Loan!</h4></td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                
                <div class="invoice-footer text-muted">
                    <p class="text-center m-b-5">
                        THANK YOU FOR CHOOSING ONE ICON MICROFINANCE
                    </p>
                    <p class="text-center">
                        <span class="m-r-10"><i class="fa fa-globe"></i>oim.com</span>
                        <span class="m-r-10"><i class="fa fa-phone"></i> M: +255 713 594923</span>
                        <span class="m-r-10"><i class="fa fa-envelope"></i>E: donaldsj9@gmail.com</span>
                    </p>
                </div>
            </div>
			<!-- end invoice -->
		</div>
		<!-- end #content -->
@include('layouts.includes.footer')