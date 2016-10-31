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
	                                            <td><?php echo $loan->first_name; ?>&nbsp;<?php echo $loan->second_name; ?>&nbsp;<?php echo $loan->last_name; ?></td>
	                                            <td><a href="<?php echo route('loan.details', $loan->id); ?>"><?php echo number_format($loan->loan_amount,2,'.',','); ?></a></td>
	                                            <td><?php echo date("d-m-Y", strtotime($loan->loan_date)); ?></td>
	                                            <td><?php echo $loan->loan_purpose; ?></td>
	                                            <td><?php echo $loan->duration; ?></td>
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