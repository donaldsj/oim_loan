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
		<script src="{!! asset('crossbrowserjs/html5shiv.js') !!}"></script>
		<script src="{!! asset('crossbrowserjs/respond.min.js') !!}"></script>
		<script src="{!! asset('crossbrowserjs/excanvas.min.js') !!}"></script>
	<![endif]-->
	<script src="{!! asset('plugins/slimscroll/jquery.slimscroll.min.js') !!}"></script>
	<script src="{!! asset('plugins/jquery-cookie/jquery.cookie.js') !!}"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<!-- <script src="assets/plugins/gritter/js/jquery.gritter.js"></script> -->
	<script src="{!! asset('plugins/flot/jquery.flot.min.js') !!}"></script>
	<script src="{!! asset('plugins/flot/jquery.flot.time.min.js') !!}"></script>
	<script src="{!! asset('plugins/flot/jquery.flot.resize.min.js') !!}"></script>
	<script src="{!! asset('plugins/flot/jquery.flot.pie.min.js') !!}"></script>
	<script src="{!! asset('plugins/sparkline/jquery.sparkline.js') !!}"></script>
	<!-- <script src="assets/plugins/jquery-jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="assets/plugins/jquery-jvectormap/jquery-jvectormap-world-mill-en.js"></script> -->
	<script src="{!! asset('plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') !!}"></script>
	<script src="{!! asset('js/dashboard.min.js') !!}"></script>
	<script src="{!! asset('js/apps.min.js') !!}"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->

	<!-- ================== EMPLOYEE PAGE LEVEL JS ================== -->
	<script src="{!! asset('plugins/DataTables/js/jquery.dataTables.js') !!}"></script>
	<script src="{!! asset('plugins/DataTables/js/dataTables.keyTable.js') !!}"></script>
	<script src="{!! asset('js/table-manage-keytable.demo.min.js') !!}"></script>
	<script src="{!! asset('js/apps.min.js') !!}"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	
	<script>
		$(document).ready(function() {
			App.init();
			Dashboard.init();
			TableManageKeyTable.init();
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

</html>
