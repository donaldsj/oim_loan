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
                                        <th colspan="2">CUSTOMER</th>
                                        <th colspan="2">REFEREE(s)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Name: <strong>{!! $customer->first_name !!}&nbsp;{!! $customer->second_name !!}&nbsp;{!! $customer->last_name !!}</strong></td>
                                        <td rowspan="6"><img src="{!! asset('img/customers_photo/'.$customer->photo_url) !!}" width="" height="160px" /></td>
                                        <td>Name: <strong>{!! $referees->first_name !!}&nbsp;{!! $referees->middle_name !!}&nbsp;{!! $referees->last_name !!}</strong></td>
                                        <td rowspan="6"><img src="{!! asset('img/customers_photo/'.$referees->photo_url) !!}" width="" height="160px" /></td>
                                    </tr>
                                    <tr>
                                        <td>Job: <strong>{!! $customer->job !!}</strong></td>
                                        <td>Title: <strong>{!! $referees->job !!}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Address: <strong>{!! $customer->street_of_residence !!}</strong></td>
                                        <td>Residence: <strong>{!! $referees->street_of_residence !!}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Contacts: <strong>{!! $customer->phone_number !!}</strong></td>
                                        <td>Mobile Phone: <strong>{!! $referees->phone_number !!}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Attending Officer: <strong>{!! $attending_officers->first_name !!}&nbsp;{!! $attending_officers->middle_name !!}&nbsp;{!! $attending_officers->last_name !!}</strong></td>
                                        <td>Relationship: <strong>{!! $referees->relationship !!}</strong></td>
                                    </tr>
                                                                      
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
                                            <td colspan="5"><h4 class="alert alert-success">No Loan for this Cusomer!</h4></td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                
                <div class="invoice-note invoice-footer">
                    * Make all cheques payable to [Your Company Name]<br />
                    * Payment is due within 30 days<br />
                    * If you have any questions concerning this invoice, contact  [Name, Phone Number, Email]
                </div>
                <div class="invoice-footer text-muted">
                    <p class="text-center m-b-5">
                        THANK YOU FOR YOUR BUSINESS
                    </p>
                    <p class="text-center">
                        <span class="m-r-10"><i class="fa fa-globe"></i> matiasgallipoli.com</span>
                        <span class="m-r-10"><i class="fa fa-phone"></i> T:016-18192302</span>
                        <span class="m-r-10"><i class="fa fa-envelope"></i> rtiemps@gmail.com</span>
                    </p>
                </div>
            </div>
			<!-- end invoice -->
		</div>
		<!-- end #content -->
@include('layouts.includes.footer')