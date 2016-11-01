<?php echo $__env->make('layouts.includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

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
                            <?php echo $customer->first_name; ?>&nbsp;<?php echo $customer->second_name; ?>&nbsp;<?php echo $customer->last_name; ?>

                            
                        </h3>
                        <span class="pull-left hidden-print">
                            <a href="<?php echo URL::to('customers'); ?>" class="btn btn-sm btn-primary m-r-5 m-b-5"><i class="fa fa-arrow-left m-r-5"></i>Back to customers</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="<?php echo URL::to('loan/application', $customer->id); ?>" class="btn btn-sm btn-warning m-b-10"><i class="fa fa-share m-r-5"></i>APPLY FOR LOAN</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
                                        <td>Name: <strong><?php echo $customer->first_name; ?>&nbsp;<?php echo $customer->second_name; ?>&nbsp;<?php echo $customer->last_name; ?></strong></td>
                                        <td rowspan="6"><img src="<?php echo asset('img/customers_photo/'.$customer->photo_url); ?>" width="" height="160px" /></td>
                                    </tr>
                                    <tr>
                                        <td>Job: <strong><?php echo $customer->job; ?></strong></td>
                                    </tr>
                                    <tr>
                                        <td>Address: <strong><?php echo $customer->street_of_residence; ?></strong></td>
                                    </tr>
                                    <tr>
                                        <td>Contacts: <strong><?php echo $customer->phone_number; ?></strong></td>
                                    </tr>
                                    <tr>
                                        <td>Attending Officer: <strong><?php echo $attending_officers->first_name; ?>&nbsp;<?php echo $attending_officers->middle_name; ?>&nbsp;<?php echo $attending_officers->last_name; ?></strong></td>
                                        
                                    </tr>
                                                                      
                                </tbody>
                            </table>

                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th colspan="5"><center><strong>REFEREES</strong></center></th>
                                    </tr>
                                    <tr>
                                        <th>Name&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo route('create_referee', $customer->id); ?>">+Add Referee</a> </th>
                                        <th>Job</th>
                                        <th>Address</th>
                                        <th>Contacts</th>
                                        <th>Relationship</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(count($referees) > 0): ?>
                                        <?php $__currentLoopData = $referees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $refer): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                            <tr>
                                                <td><?php echo $refer->first_name; ?>&nbsp;<?php echo $refer->second_name; ?>&nbsp;<?php echo $refer->last_name; ?></td>
                                                <td><?php echo $refer->job; ?>,&nbsp;<?php echo $refer->work_location; ?></td>
                                                <td><?php echo $refer->street_of_residence; ?></td>
                                                <td><?php echo $refer->phone_number; ?></td>
                                                <td><?php echo $refer->relationship; ?></td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?> 
                                    <?php else: ?>
                                        <tr>
                                            <td colspan="5"><h4 class="alert alert-warning">No Referee for this Cusomer!&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo route('create_referee', $customer->id); ?>">+Add Referee</a></h4></td>
                                        </tr>
                                    <?php endif; ?>                                                             
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
                                        <th>AMOUNT (TZS)</th>
                                        <th>STATUS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(count($customer_loans) > 0): ?>
                                        <?php $__currentLoopData = $customer_loans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cust_loans): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?> 
                                            <tr>
                                                <td><a href="<?php echo route('loan.details', $cust_loans->id); ?>"><?php echo ($cust_loans->loan_code == "")? "Not Confirmed!" : $cust_loans->loan_code; ?></a></td>
                                                <td><?php echo $cust_loans->loan_purpose; ?></td>
                                                <td><?php echo $cust_loans->loan_date; ?></td>
                                                <td><?php echo number_format($cust_loans->loan_amount,2,'.',','); ?></td>
                                                <td><?php echo ($cust_loans->status == 0)? "Open" : "Closed"; ?></td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                                    <?php else: ?>
                                        <tr>
                                            <td colspan="5"><h4 class="alert alert-success">This Cusomer does not have any previous Loan!</h4></td>
                                        </tr>
                                    <?php endif; ?>
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
<?php echo $__env->make('layouts.includes.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>