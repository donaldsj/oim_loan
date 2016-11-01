<?php echo $__env->make('layouts.includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li><a href="javascript:;">Dashboard</a></li>
				<li><a href="javascript:;">Loan application</a></li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Loan Application <small></small></h1>
			<!-- end page-header -->
			
			<!-- begin row -->
			<div class="row">
                <!-- begin col-12 -->
			    <div class="col-md-12">
			        <!-- begin panel -->
                    <div class="panel">
                        <div class="panel-heading">                           
                            <h4 class="panel-title">LOAN Application RETURN form</h4>
                        </div>
                        <div class="panel-body">
                        <?php echo Form::open(['action' => 'LoansController@store_loan_return', 'method' => 'POST', 'name' => 'form-wizard', 'data-parsley-validate' => 'true']); ?>


								<div id="wizard">
									
									<div class="">
                                        <fieldset>
                                            <legend class="pull-left width-full">Return Information</legend>
                                            <div class="row">                                            
				                                <div class="col-md-4">
				                                    <div class="form-group">
				                                    	<label for="loan_code">LOAN CODE / ID:</label>
				                                    	<select name="loan_code" class="form-control" data-parsley-group="wizard-step-1">
				                                    		<option value="">-- select --</option>
				                                    		<?php $__currentLoopData = $loan_codes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $codes): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>				                                    			
				                                    			<option value="<?php echo $codes->loan_code; ?>"><?php echo $codes->loan_code; ?></option>
				                                    		<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
				                                    	</select>
				                                    </div>
				                                </div>				                                
			                                </div>
                                            <div class="row">
                                                <div class="col-md-6">
													<div class="form-group block1">
														<label for="return_amount">RETURNED AMOUNT:</label>
														<input type="text" name="return_amount" placeholder="" class="form-control" data-parsley-group="wizard-step-1" />
													</div>
                                                </div>    
                                            </div>
                                            
			                                <div class="ln_solid"></div>
											 <div class="form-group">
											   <div class="col-md-6 col-md-offset-3">
											     <button type="reset" class="btn btn-primary btn-sm">Cancel</button>
											     <button type="submit" class="btn btn-success btn-sm">Submit</button>
											   </div>
											 </div>

										</fieldset>
									</div>
									
									
								</div>
							<?php echo Form::close(); ?>

                        </div>
                    </div>
                    <!-- end panel -->
                </div>
                <!-- end col-12 -->
            </div>
            <!-- end row -->
		</div>
		<!-- end #content -->
		
		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>
	<!-- end page container -->

	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="<?php echo asset('plugins/jquery/jquery-1.9.1.min.js'); ?>"></script>
	<script src="<?php echo asset('plugins/jquery/jquery-migrate-1.1.0.min.js'); ?>"></script>
	<script src="<?php echo asset('plugins/jquery-ui/ui/minified/jquery-ui.min.js'); ?>"></script>
	<script src="<?php echo asset('plugins/bootstrap/js/bootstrap.min.js'); ?>"></script>
	<!--[if lt IE 9]>
		<script src="assets/crossbrowserjs/html5shiv.js"></script>
		<script src="assets/crossbrowserjs/respond.min.js"></script>
		<script src="assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="<?php echo asset('plugins/slimscroll/jquery.slimscroll.min.js'); ?>"></script>
	<script src="<?php echo asset('plugins/jquery-cookie/jquery.cookie.js'); ?>"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="<?php echo asset('plugins/parsley/dist/parsley.js'); ?>"></script>
	<script src="<?php echo asset('plugins/bootstrap-wizard/js/bwizard.js'); ?>"></script>
	<script src="<?php echo asset('js/form-wizards-validation.demo.min.js'); ?>"></script>
	<script src="<?php echo asset('js/apps.min.js'); ?>"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	<script src="<?php echo asset('plugins/bootstrap-datepicker/js/bootstrap-datepicker.js'); ?>"></script>
	<script src="<?php echo asset('js/form-plugins.demo.min.js'); ?>"></script>
	<script src="<?php echo asset('plugins/masked-input/masked-input.min.js'); ?>"></script>
	
	<script>
		$(document).ready(function() {
			App.init();
			FormWizardValidation.init();
			FormPlugins.init();
		});
	</script>
	<script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','../../../../www.google-analytics.com/analytics.js','ga');
    
      ga('create', 'UA-53034621-1', 'auto');
      ga('send', 'pageview');
    </script>
</body>

<!-- Mirrored from seantheme.com/color-admin-v1.7/admin/html/form_wizards_validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Apr 2015 10:57:33 GMT -->
</html>
