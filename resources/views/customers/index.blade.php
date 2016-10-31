@include('layouts.includes.header')

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
				<h1 class="page-header">Customers<small>List of our ustomers..</small></h1>                
				<!-- end page-header -->
			</div>
			<!-- begin row -->
			<div class="row">
			    
			    <!-- begin col-10 -->
			    <div class="col-md-12">
			        <!-- begin panel -->
                    <div class="panel">
                    <!-- <div class="panel panel-info"> -->
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                            </div>
                            <h4 class="panel-title">List of loan customers</h4>
                            <a href="{!! route('customers.create') !!}" class="btn btn-primary m-r-5 m-b-5">Add new Customer</a>


                        </div>
                       <!--  <div class="alert alert-success col-md-8 fade in">
                            <button type="button" class="close" data-dismiss="alert">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            Success message
                        </div> -->
                        <div class="panel-body">
                        
                            <div class="table-responsive">
                                
                                <table id="data-table" class="table table-hover table-condensed table-bordered nowrap" width="100%">
                                    <thead>
                                        <tr>
                                            <th>Full Name</th>
                                            <th>Residence</th>
                                            <th>Address</th>
                                            <th>Marital Status</th>
                                            <th>Contacts</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($customers as $customer)

                                        <tr class="">
                                            <td><a href="{!! route('customers.show', $customer->id) !!}">{!! $customer->first_name !!}&nbsp;{!! $customer->second_name !!}&nbsp;{!! $customer->last_name !!}</a></td>
                                            <td>{!! $customer->street_of_residence !!}</td>
                                            <td>{!! $customer->postal_address !!}</td>
                                            <td>{!! $customer->marital_status !!}</td>
                                            <td>{!! $customer->phone_number !!}</td>
                                            <td>
                                            	<a href="{!! route('customers.show', $customer->id) !!}" class=""><i class="fa fa-file-text-o"></i></a>&nbsp;|&nbsp;
                                                <a href="" class=""><i class="fa fa-edit"></i></a>&nbsp;|&nbsp;
                                                <a href="{!! route('customer.destroy', $customer->id) !!}" class=""><i class="fa fa-trash"></i></a>                                               
                                            </td>
                                        </tr>
                                        @endforeach                                                                    
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
	<script src="{!! asset('plugins/DataTables/js/jquery.dataTables.js') !!}"></script>
	<script src="{!! asset('plugins/DataTables/js/dataTables.tableTools.js') !!}"></script>
	<script src="{!! asset('js/table-manage-tabletools.demo.min.js') !!}"></script>
	<script src="{!! asset('js/apps.min.js') !!}"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	
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
