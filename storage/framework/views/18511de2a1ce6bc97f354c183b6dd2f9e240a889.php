<?php echo $__env->make('layouts.includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

		<!-- begin #content -->
		<div id="content" class="content">
			<div class="">
				<!-- begin breadcrumb -->
				<ol class="breadcrumb pull-right">
					<li><a href="javascript:;">Dashboard</a></li>
					<li><a href="javascript:;">Users</a></li>
					<li><a href="javascript:;">Customers</a></li>
					<li><a href="javascript:;">List</a></li>
				</ol>
				<!-- end breadcrumb -->
				<!-- begin page-header -->
				<h1 class="page-header">LOAN APPLICATIONS<small>List of Customers who processed loans</small></h1>                
				<!-- end page-header -->
			</div>
			<!-- begin row -->
			<div class="row">
			    
			    <!-- begin col-10 -->
			    <div class="col-md-12">
			        <!-- begin panel -->
                    <div class="panel panel-default">
                    <!-- <div class="panel panel-info"> -->
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                            </div>
                            <h4 class="panel-title">List of all loan applications</h4>
                        </div>
                       <!--  <div class="alert alert-info fade in">
                            <button type="button" class="close" data-dismiss="alert">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            TableTools is a plug-in for the DataTables HTML table enhancer, which adds a highly customisable button toolbar to a DataTable. 
                        </div> -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                
                                <table id="data-table" class="table table-hover table-condensed table-bordered nowrap" width="100%">
                                    <thead>
                                        <tr>
                                            <th>Customer's Name</th>
                                            <th>Loan Amount(TZS)</th>
                                            <th>Loan Date</th>
                                            <th>Purpose</th>
                                            <th>Duration</th>
                                            <th>Due Date</th>
                                            <th>Status</th>
                                            <th>Confirmed</th>
                                            <th></th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                    	<?php $__currentLoopData = $loans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loan): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                    	<!-- <a href=""> -->
	                                        <tr>
	                                            <td><a href="<?php echo route('loan.requestform'); ?>"><?php echo $loan->first_name; ?>&nbsp;<?php echo $loan->second_name; ?>&nbsp;<?php echo $loan->last_name; ?></a></td>
	                                            <td><a href="<?php echo route('loan.details', $loan->id); ?>"><?php echo number_format($loan->loan_amount,2,'.',','); ?></a></td>
	                                            <td><?php echo date("d-m-Y", strtotime($loan->loan_date)); ?></td>
	                                            <td><?php echo $loan->loan_purpose; ?></td>
	                                            <td><?php echo $loan->duration; ?> Months</td>
	                                            <td><?php echo date("d-m-Y", strtotime($loan->due_date)); ?></td>
	                                            <td><?php echo ($loan->status == 0)? "open" : "Closed"; ?></td>
	                                            <td><?php echo ($loan->confirmed == 0)? '<i class="fa fa-times"></i>' : '<i class="fa fa-check"></i>'; ?></td>
	                                            <td>	                                            	
	                                            	<a href="<?php echo route('loan.details', $loan->id); ?>"><i class="fa fa-file-text-o"></i></a>&nbsp;&nbsp;
												    <?php if(($loan->confirmed == 0) && ($loan->loan_code == "")): ?>
	                                            		<a href=""><i class="fa fa-edit"></i></a>
												    	<a href="<?php echo route('loan.destroy',$loan->id); ?>"><i class="fa fa-trash"></i></a>
												    <?php endif; ?>
	                                            </td>
	                                        </tr>
	                                   <!--  </a> -->
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>                                                                  
                                    </tbody>
                                </table>
                                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">Preview form</button>
                            </div>










                            <!-- Modal -->
					  <div class="modal fade" id="myModal" role="dialog">
						<div class="modal-dialog modal-lg">
						
						  <!-- Modal content-->
						  <div class="modal-content">
							<div class="modal-header">
							  <button type="button" class="close" data-dismiss="modal">&times;</button>				  
							</div>

                            <!-- begin invoice -->
				            <div class="invoice" id="printable_doc">
				                    <div class="table-responsive">                        
				                        
				                        <div class="row col-md-10" style="text-align: center;">
				                            <img src="<?php echo asset('img/OneIcon.png'); ?>" width="150px" height="150px" />
				                            <h2>ONE ICON MICROFINANCE LIMITED</h2> 
				                            <hr style="color: #000000;" />                           
				                        </div>

				                        <div class="row col-md-10">
				                            <h3>
				                                LOAN REQUEST FORM                            
				                            </h3>
				                        </div>
				                        
				                        <div class="row col-md-10">
				                            <h4>1. IMPORTANT NOTICE</h4>
				                            <ol>
				                                <li>Lorem ipsum dolor sit amet, ad consul quaeque eligendi est, prima ornatus vocibus sit eu</li>
				                                <li>Ancillae volutpat vel cu, mei sanctus epicurei maiestatis ex, sed malis convenire eu. Et vix brute ipsum. </li>
				                                <li>Duo nullam torquatos vulputate no. Labore inermis eu sit. Omnis partiendo nec ad, eu dicat fabulas vel.</li>
				                                <li>Sit sale necessitatibus ut, accumsan officiis consulatu sea et. Autem consetetur vim ne. Cu nam molestie ocurreret. Sint adolescens duo eu, ius ei phaedrum iracundia temporibus, in nusquam instructior nam. Posse option ullamcorper has te, latine omittam cu per, pri affert prodesset ei.</li>
				                            </ol>                            
				                        </div>

				                        <div class="row col-md-10">
				                            <table class="table table-bordered">
				                                <h4>2. CUSTOMER DETAILS</h4>
				                                <thead>
				                                   <!--  <tr>
				                                        <th colspan="2"><center><strong>CUSTOMER</strong></center></th>
				                                    </tr> -->
				                                </thead>
				                                <tbody>
				                                    <tr>
				                                        <td>Name: <strong>name</strong></td>
				                                        <td rowspan="6"><img src="<?php echo asset('img/customers_photo/1477828870-sam.jpg'); ?>" width="" height="160px" /></td>
				                                    </tr>
				                                    <tr>
				                                        <td>Job: <strong>Job</strong></td>
				                                    </tr>
				                                    <tr>
				                                        <td>Address: <strong>Address</strong></td>
				                                    </tr>
				                                    <tr>
				                                        <td>Contacts: <strong>Contacts</strong></td>
				                                    </tr>
				                                    <tr>
				                                        <td>Attending Officer: <strong>Officer name</strong></td>
				                                        
				                                    </tr>
				                                                                      
				                                </tbody>
				                            </table>

				                            <table class="table table-bordered">
				                                <h4>3. REFEREES DETAILS</h4>
				                                <thead>
				                                   <!--  <tr>
				                                        <th colspan="5"><center><strong>REFEREES</strong></center></th>
				                                    </tr> -->
				                                    <tr>
				                                        <th>Name</th>
				                                        <th>Job</th>
				                                        <th>Address</th>
				                                        <th>Contacts</th>
				                                        <th>Relationship</th>
				                                    </tr>
				                                </thead>
				                                <tbody>
				                                    <tr>
				                                        <td>Ref Name</td>
				                                        <td>ocaion</td>
				                                        <td>Sreet</td>
				                                        <td>12345678</td>
				                                        <td>Relation</td>
				                                    </tr>                                                            
				                                </tbody>
				                            </table>                            
				                        </div>

				                        <div class="row col-md-10">
				                            <h4>4. LOAN DETAILS</h4>                            
				                            <table class="table table-bordered">
				                                <thead>
				                                    <tr>
				                                        <th>CODE</th>
				                                        <th>PURPOSE</th>
				                                        <th>DATE</th>
				                                        <th>AMOUNT</th>
				                                    </tr>
				                                </thead>
				                                <tbody>
				                                    <tr>
				                                        <td><a href="">wertytre</a></td>
				                                        <td>Purpose</td>
				                                        <td>123-123-12</td>
				                                        <td>TSH.123456</td>
				                                    </tr>
				                                </tbody>
				                            </table>
				                        </div>

				                        <div class="row col-md-10">
				                            <h4>5. LOAN OFFICER</h4>
				                            <P>Name: Donald Annnieni Dibrobasi.</P>
				                            <p>Comment: Sit sale necessitatibus ut, accumsan officiis consulatu sea et. Autem consetetur vim ne. Cu nam molestie ocurreret. Sint adolescens duo eu, ius ei phaedrum iracundia temporibus, in nusquam instructior nam. Posse option ullamcorper has te, latine omittam cu per, pri affert prodesset ei.</p> 
				                            <p>Signature............................................... Date .......................</P>
				                        </div>

				                        <div class="row col-md-10">
				                            <h4>6. CREDIT MANAGER / DIRECTOR</h4>
				                            <P>......................................................................</P>
				                        </div>

				                        <div class="row col-md-10">
				                            <h4>7. CUSTOMER AGREMENT AND RECEIVE APPROVAL</h4>
				                            <p>Comment: Sit sale necessitatibus ut, accumsan officiis consulatu sea et. Autem consetetur vim ne. Cu nam molestie ocurreret. Sint adolescens duo eu, ius ei phaedrum iracundia temporibus, in nusquam instructior nam. Posse option ullamcorper has te, latine omittam cu per, pri affert prodesset ei.</p> 
				                            <p>Signature............................................... Date .......................</P>
				                        </div>


				                    </div>
				                        <span class="pull-left hidden-print">
						                    <a href="javascript:PrintDiv('printable_doc');" class="btn btn-primary m-r-5 m-b-5"><i class="fa fa-print left"></i>Print</a>
						                </span>
				                     
				                
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
				           </div>
				        </div>











                        </div>
                    </div>
                    <!-- end panel -->
                </div>
                <!-- end col-10 -->

            </div>
            <!-- end row -->
		</div>
		<!-- end #content -->
		
		
		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>
	<!-- end page container -->







	<script type="text/javascript">
    function PrintDiv(divToPrint) 
              {    
                var restorepoint = document.body.innerHTML;
                var printcontent = document.getElementById('printable_doc').innerHTML;

                document.body.innerHTML = printcontent;
                window.print();
                document.body.innerHTML = restorepoint;
               }
    </script>






	
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
	<script src="<?php echo asset('plugins/DataTables/js/jquery.dataTables.js'); ?>"></script>
	<script src="<?php echo asset('plugins/DataTables/js/dataTables.tableTools.js'); ?>"></script>
	<script src="<?php echo asset('js/table-manage-tabletools.demo.min.js'); ?>"></script>
	<script src="<?php echo asset('js/apps.min.js'); ?>"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->

	<script type="text/javascript">
		$(function () {
		  $('.delete_data').on('click', function (e) {
		    if (!confirm('Are you sure you want to delete?')) return;
		    e.preventDefault();
		    $('#form-delete-' + $(this).data('form')).submit();
		  });
		});
	</script>
	
	<script>
		$(document).ready(function() {
			App.init();
			TableManageTableTools.init();
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

<!-- Mirrored from seantheme.com/color-admin-v1.7/admin/html/table_manage_tabletools.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Apr 2015 10:59:00 GMT -->
</html>
