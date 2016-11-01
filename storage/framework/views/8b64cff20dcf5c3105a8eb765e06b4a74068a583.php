<?php echo $__env->make('layouts.includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li><a href="javascript:;">Home</a></li>
				<li class="active">Dashboard</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Dashboard <small>Loan Management System</small></h1>
			<!-- end page-header -->
			
			<!-- begin row -->
			<div class="row">
				<!-- begin col-3 -->
				<div class="col-md-3 col-sm-6">
					<a href="<?php echo URL::to('customers'); ?>" style="text-decoration: none">
                        <div class="widget widget-stats bg-green">
    						<div class="stats-icon"><i class="fa fa-group"></i></div>
    						<div class="stats-info">
    							<h4>TOTAL CUSTOMERS</h4>
    							<p><?php echo number_format(count($customers)); ?></p>	
    						</div>
    					</div>
                    </a>
				</div>
				<!-- end col-3 -->
				<!-- begin col-3 -->
				<div class="col-md-3 col-sm-6">
					<a href="<?php echo URL::to('loans'); ?>" style="text-decoration: none">
                        <div class="widget widget-stats bg-blue">
    						<div class="stats-icon"><i class="fa fa-book"></i></div>
    						<div class="stats-info">
    							<h4>ACTIVE LOANS</h4>
    							<p><?php echo number_format($active_loan_amount, 2, '.', ','); ?>&nbsp;TZS</p>	
    						</div>						
    					</div>
                    </a>
				</div>
				<!-- end col-3 -->
				<!-- begin col-3 -->
				<div class="col-md-3 col-sm-6">
					<a href="" style="text-decoration: none">
                        <div class="widget widget-stats bg-purple">
    						<div class="stats-icon"><i class="fa fa-check-square-o"></i></div>
    						<div class="stats-info">
    							<h4>RETURNED AMOUNT</h4>
    							<p><?php echo number_format($returned, 2, '.', ','); ?>&nbsp;TZS</p>	
    						</div>
    					</div>
                    </a>
				</div>
				<!-- end col-3 -->
				<!-- begin col-3 -->
				<div class="col-md-3 col-sm-6">
					<a href="" style="text-decoration: none">
                        <div class="widget widget-stats bg-red">
    						<div class="stats-icon"><i class="fa fa-circle-o-notch"></i></div>
    						<div class="stats-info">
    							<h4>IN LOAN</h4>
    							<p><?php echo number_format($in_loan, 2, '.', ','); ?>&nbsp;TZS</p>	
    						</div>
    					</div>
                    </a>
				</div>
				<!-- end col-3 -->
			</div>
			<!-- end row -->
			<!-- begin row -->
			<div class="row">
				<!-- begin col-8 -->
				<div class="col-md-8">
					<div class="panel panel-default" data-sortable-id="table-basic-7">
						<div class="panel-heading">
                            <!-- <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                            </div> -->
                            <h4 class="panel-title">CURRENT LOANS</h4>
                        </div>
						<div class="table-responsive">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th></th>
										<th>CUSTOMER</th>
										<!-- <th>PHYSICAL ADDRESS</th> -->
										<th>CONTACTS</th>
										<th>LOAN AMOUNT (TZS)</th>
										<th>RETURNED AMOUNT (TZS)</th>
									</tr>
								</thead>
								<tbody>
								<?php if(count($loans)): ?>
									<?php $__currentLoopData = $loans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loan): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
									<tr>
										<td><a href="<?php echo route('loan.details', $loan->id); ?>"><i class="fa fa-lg fa-hand-o-right"></i></a></td>
										<td><?php echo $loan->first_name; ?>&nbsp;<?php echo $loan->second_name; ?>&nbsp;<?php echo $loan->last_name; ?></td>
										
										<td><?php echo $loan->phone_number; ?></td>
										<td><?php echo number_format($loan->loan_amount, 2, '.', ','); ?></td>
										<td><?php echo number_format($loan->balance, 2, '.', ','); ?></td>
									</tr>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
								<?php else: ?>
									<tr>
										<td colspan="6"><h4 class="alert alert-warning">No data found for you!</h4></td>
									</tr>
								<?php endif; ?>
								</tbody>
							</table>
							<div style="clear: both"><?php echo $loans->render(); ?></div>
							
						</div>
					</div>

                </div>
                <!-- end col-8 -->
				<!-- begin col-4 -->
				<div class="col-md-4">
					
					<div class="panel panel-inverse" data-sortable-id="index-10">
						<div class="panel-heading">
							<!-- <div class="panel-heading-btn">
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
							</div> -->
							<h4 class="panel-title">Calendar</h4>
						</div>
						<div class="panel-body">
							<div id="datepicker-inline" class="datepicker-full-width"><div></div></div>
						</div>
					</div>
				</div>
				<!-- end col-4 -->
			</div>
			<!-- end row -->
		</div>
		<!-- end #content -->
<?php echo $__env->make('layouts.includes.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>