@include('layouts.includes.header')

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
                        </div>
                        <div class="panel-body">
                        {!! Form::open(['action' => 'LoansController@store', 'files' => true, 'method' => 'POST', 'name' => 'form-wizard', 'data-parsley-validate' => 'true']) !!}

								<div id="panel">
									<!-- <ol>										
										<li>
										    REFEREE'S INFORMATION
										    <small>Taarifa ya Wadhamini</small>
										</li>
										<li>
										    LOAN INFORMATION 
										    <small>Taarifa za mkopo</small>
										</li>
										<li>
										    ASSETS
										    <small>Dhamana ya vitu</small>
										</li>
										<li>
										    ATTACHMENTS
										    <small>Viambatanishi</small>
										</li>
									</ol> -->									
									
									<!-- <div class="wizard-step-2">
										<fieldset>
											<legend class="pull-left width-full">REFEREE'S INFORMATION</legend>
                                            <div class="row">

                                                <div class="col-md-4">
													<div class="form-group block1">
														<label>First Name</label>
														<input type="text" name="firstname" placeholder="John" class="form-control" data-parsley-group="wizard-step-1" />
													</div>
                                                </div>
                                                <div class="col-md-4">
													<div class="form-group">
														<label>Middle Name</label>
														<input type="text" name="middle" placeholder="A" class="form-control" data-parsley-group="wizard-step-1" />
													</div>
                                                </div>
                                                <div class="col-md-4">
													<div class="form-group">
														<label>Last Name</label>
														<input type="text" name="middle" placeholder="A" class="form-control" data-parsley-group="wizard-step-1" />
													</div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
													<div class="form-group">
														<label>Place of residence</label>
														<input type="text" name="lastname" placeholder="Smith" class="form-control" data-parsley-group="wizard-step-1" />
													</div>
                                                </div>
                                                <div class="col-md-6">
													<div class="form-group">
														<label>Relationship</label>
														<input type="email" name="email" placeholder="someone@example.com" class="form-control" data-parsley-group="wizard-step-2" data-parsley-type="email" />
													</div>
                                                </div>
                                            </div>

                                            <div class="row">     
                                                <div class="col-md-6">
													<div class="form-group">
														<label>Job</label>
														<input type="text" name="phone" placeholder="1234567890" class="form-control" data-parsley-group="wizard-step-2" data-parsley-type="number" />
													</div>
                                                </div>
                                                <div class="col-md-6">
													<div class="form-group">
														<label>Name of the company / Business</label>
														<input type="email" name="email" placeholder="someone@example.com" class="form-control" data-parsley-group="wizard-step-2" data-parsley-type="email" />
													</div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
													<div class="form-group">
														<label>office/Business Location</label>
														<input type="text" name="phone" placeholder="1234567890" class="form-control" data-parsley-group="wizard-step-2" data-parsley-type="number" />
													</div>
                                                </div>                                               
                                                
                                                <div class="col-md-6">
													<div class="form-group">
														<label>Phone Number</label>
														<input type="text" name="phone" placeholder="1234567890" class="form-control" data-parsley-group="wizard-step-2" data-parsley-type="number" />
													</div>
                                                </div>
                                                <div class="col-md-6">
													<div class="form-group">
														<label>Email Address</label>
														<input type="email" name="email" placeholder="someone@example.com" class="form-control" data-parsley-group="wizard-step-2" data-parsley-type="email" />
													</div>
                                                </div>
                                            </div>
										</fieldset>
									</div> -->

									<div class="wizard-step-1">
                                        <fieldset>
                                            <legend class="pull-left width-full">LOAN INFORMATION</legend>
                                            <input type="hidden" name="customer_id" value="{!! $id !!}">
                                            <div class="row">
                                            	<div class="col-md-4">                                            		
				                                	<div class="form-group">
				                                    	<label for="loan_date">Date:</label>		                  	                  
				                                        <input type="text" name="loan_date" class="form-control" id="datepicker-autoClose" placeholder="" />
				                                    </div>
				                                </div>
				                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
													<div class="form-group block1">
														<label for="loan_amount">AMOUNT:</label>
														<input type="text" name="loan_amount" placeholder="" class="form-control" data-parsley-group="wizard-step-1" />
													</div>
                                                </div>    
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
													<div class="form-group block1">
														<label for="loan_purpuse">PURPUSE OF LOAN</label>
														<input type="text" name="loan_purpose" placeholder="" class="form-control" data-parsley-group="wizard-step-1" />
													</div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
													<div class="form-group">
														<label for="income_source">Source of Income(Return)</label>
														<input type="text" name="income_source" placeholder="" class="form-control" data-parsley-group="wizard-step-1" />
													</div>
                                                </div>
                                            </div>
                                            <div class="row">                                            
				                                <div class="col-md-4">
				                                    <div class="form-group">
				                                    	<label for="duration">LOAN DURATION</label>
				                                    	<input type="text" name="duration" placeholder="" class="form-control" data-parsley-group="wizard-step-1" />
				                                    </div>
				                                </div>				                                
			                                </div>	

			                                <div class="ln_solid"></div>
											 <div class="form-group">
											   <div class="col-md-6 col-md-offset-3">
											     <button type="reset" class="btn btn-primary btn-lg">Cancel</button>
											     <button type="submit" class="btn btn-success btn-lg">Submit</button>
											   </div>
											 </div>

										</fieldset>
									</div>
									
									<!-- <div class="wizard-step-3">
										<fieldset>
											<legend class="pull-left width-full">Login</legend>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Username</label>
                                                        <div class="controls">
                                                            <input type="text" name="username" placeholder="johnsmithy" class="form-control" data-parsley-group="wizard-step-3" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Pasword</label>
                                                        <div class="controls">
                                                            <input type="password" name="password" placeholder="Your password" class="form-control" data-parsley-group="wizard-step-3" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Confirm Pasword</label>
                                                        <div class="controls">
                                                            <input type="password" name="password2" placeholder="Confirmed password" class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
									</div> -->
									<!-- <div>
									    <div class="jumbotron m-b-0 text-center">
                                            <h1>Saved Successfully</h1>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris consequat commodo porttitor. Vivamus eleifend, arcu in tincidunt semper, lorem odio molestie lacus, sed malesuada est lacus ac ligula. Aliquam bibendum felis id purus ullamcorper, quis luctus leo sollicitudin. </p>
                                            <p><a class="btn btn-success btn-lg" role="button">Proceed to User Profile</a></p>
                                        </div>
									</div> -->
								</div>
							{!! Form::close() !!}
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
	<script src="{!! asset('plugins/jquery/jquery-1.9.1.min.js') !!}"></script>
	<script src="{!! asset('plugins/jquery/jquery-migrate-1.1.0.min.js') !!}"></script>
	<script src="{!! asset('plugins/jquery-ui/ui/minified/jquery-ui.min.js') !!}"></script>
	<script src="{!! asset('plugins/bootstrap/js/bootstrap.min.js') !!}"></script>
	<!--[if lt IE 9]>
		<script src="assets/crossbrowserjs/html5shiv.js"></script>
		<script src="assets/crossbrowserjs/respond.min.js"></script>
		<script src="assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="{!! asset('plugins/slimscroll/jquery.slimscroll.min.js') !!}"></script>
	<script src="{!! asset('plugins/jquery-cookie/jquery.cookie.js') !!}"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="{!! asset('plugins/parsley/dist/parsley.js') !!}"></script>
	<script src="{!! asset('plugins/bootstrap-wizard/js/bwizard.js') !!}"></script>
	<script src="{!! asset('js/form-wizards-validation.demo.min.js') !!}"></script>
	<script src="{!! asset('js/apps.min.js') !!}"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	<script src="{!! asset('plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') !!}"></script>
	<script src="{!! asset('js/form-plugins.demo.min.js') !!}"></script>
	<script src="{!! asset('plugins/masked-input/masked-input.min.js') !!}"></script>
	
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
