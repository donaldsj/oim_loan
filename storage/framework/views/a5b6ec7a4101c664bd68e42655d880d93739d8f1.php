<?php echo $__env->make('layouts.includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

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
                                <a href="<?php echo URL::to('loans'); ?>" class="btn btn-sm btn-primary m-r-5 m-b-5"><i class="fa fa-arrow-left m-r-5"></i>Back to Loans list</a>
                            </span>
                        </h3>
                        <div class="row col-md-8">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Customer (Owner): <h4><?php echo $officer->fname; ?>&nbsp;<?php echo $officer->sname; ?>&nbsp;<?php echo $officer->lname; ?></h4></th>
                                        <th>Loan Code (#): 
                                            
                                            <?php if(($loan->loan_code != NULL) || ($loan->loan_code != "")): ?>
                                                <h4><?php echo $loan->loan_code; ?></h4>
                                            <?php else: ?>
                                                <h4><a href="<?php echo route('loan.confirm', $loan->id); ?>" class="btn btn-sm btn-warning">Confirm</a></h4>
                                            <?php endif; ?>
                                            
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Attending Officer: <strong><?php echo $officer->first_name; ?>&nbsp;<?php echo $officer->middle_name; ?>&nbsp;<?php echo $officer->last_name; ?></strong></td>
                                        <td>Amount (Tsh): <strong><?php echo number_format($loan->loan_amount,2,'.',','); ?>&nbsp;TZS</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Borrow date: <strong><?php echo date("d/m/Y", strtotime($loan->loan_date)); ?></strong></td>
                                        <td>Returned amount: <strong><?php echo number_format($total_returns,2,'.',','); ?>&nbsp;TZS</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Purpose: <strong><?php echo $loan->loan_purpose; ?></strong></td>
                                        <td>Penalty: <strong><?php echo $loan->customer_id; ?></strong></td>
                                    </tr>
                                                                    
                                </tbody>
                            </table>
                        </div>
                        <div style="clear: both;"></div>
                        <h4>RETURN DETAILS</h4>
                        <div class="row col-md-8">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Amount</th>
                                        <th>Teller</th>
                                        <th width="10%"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(count($returns) != null): ?>
                                        <?php $__currentLoopData = $returns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loan_return): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                            <tr>
                                                <td><?php echo $loan_return->return_date; ?></td>
                                                <td><?php echo $loan_return->return_amount; ?></td>
                                                <td><?php echo $loan_return->user_id; ?></td>
                                                <td><a href="">Edit</a></td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                                    <?php else: ?>
                                        <tr>
                                            <td colspan="4"><p class="alert alert-info">No data yet!</p></td>
                                        </tr>
                                    <?php endif; ?>                                
                                </tbody>
                            </table>
                        </div>
                    </div>

                                 
                <div style="clear: both;"></div>
               
                <div class="invoice-footer text-muted">
                    <p class="text-center m-b-5">
                        AHSANTE KWA KUCHAGUA KUWA MTEJA WETU!
                    </p>
                    <p class="text-center">
                        <span class="m-r-10"><i class="fa fa-globe"></i> matiasgallipoli.com</span>
                        <span class="m-r-10"><i class="fa fa-phone"></i> T:016-18192302</span>
                        <span class="m-r-10"><i class="fa fa-envelope"></i> rtiemps@gmail.com</span>
                    </p>
                </div>
                <div class="row col-md-8">
                        <a href="javascript:;" onclick="window.print()" class="btn btn-sm btn-info"><i class="fa fa-print m-r-5"></i> Print</a>&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="javascript:;" onclick="window.print()" class="btn btn-sm btn-danger"><i class="fa fa-trash m-r-5"></i> Delete this loan!</a>
                </div>
                <div style="clear: both;"></div>
            </div>
			<!-- end invoice -->
		</div>
		<!-- end #content -->
<?php echo $__env->make('layouts.includes.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>