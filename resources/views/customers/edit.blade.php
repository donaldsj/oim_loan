{!! Form::model($task, ['method' => 'PATCH', 'route' => ['tasks.update', $task->id]]) !!}

	<div class="form-group">
	    {!! Form::label('title', 'Title:', ['class' => 'control-label']) !!}
	    {!! Form::text('title', null, ['class' => 'form-control']) !!}
	</div>

	<div class="form-group">
	    {!! Form::label('description', 'Description:', ['class' => 'control-label']) !!}
	    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
	</div>

	{!! Form::submit('Update Task', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

@include('layouts.includes.header')

        <!-- begin #content -->
        <div id="content" class="content">
            <!-- begin breadcrumb -->
            <ol class="breadcrumb pull-right">
                <li><a href="javascript:;">Dashboard</a></li>
                <li><a href="javascript:;">Customers</a></li>
            </ol>
            <!-- end breadcrumb -->
            <!-- begin page-header -->
            <h1 class="page-header">Update Customer<small></small>
                <a href="{!! URL::to('customers') !!}" class="btn btn-sm btn-primary m-r-5 m-b-5"><i class="fa fa-arrow-left m-r-5"></i>Back to customers</a>
            </h1>

            <!-- end page-header -->
            
            <!-- begin row -->
            <div class="row">
                <!-- begin col-12 -->
                <div class="col-md-10">
                    <!-- begin panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">Customer Update form</h4>
                        </div>

                        <div class="panel-body">

                            {!! Form::model($customer, ['files' => true, 'method' => 'PATCH', 'name' => 'form-wizard', 'data-parsley-validate' => 'true' 'route' => ['customers.update', $customer->id]]) !!}

                                @include('customers.form', ['submitButton' => "Save"])
                            
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
