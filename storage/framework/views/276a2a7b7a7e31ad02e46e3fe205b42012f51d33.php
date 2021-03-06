<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Mirrored from seantheme.com/color-admin-v1.7/admin/html/form_elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Apr 2015 10:56:44 GMT -->
<head>
	<meta charset="utf-8" />
	<title>ioMicrofinance</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<!-- <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet"> -->
	<link href="<?php echo asset('plugins/jquery-ui/themes/base/minified/jquery-ui.min.css'); ?>" rel="stylesheet" />
	<link href="<?php echo asset('plugins/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" />
	<link href="<?php echo asset('plugins/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet" />
	<link href="<?php echo asset('css/style.min.css'); ?>" rel="stylesheet" />
	<link href="<?php echo asset('css/style-responsive.min.css'); ?>" rel="stylesheet" />
	<link href="<?php echo asset('css/theme/default.css'); ?>" rel="stylesheet" id="theme" />
	<!-- ================== END BASE CSS STYLE ================== -->
		
</head>
<body class="pace-top bg-white">
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade in"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade">
	    <!-- begin login -->
        <div class="login login-with-news-feed">
            <!-- begin news-feed -->
            <div class="news-feed">
                <div class="news-image">
                    <img src="<?php echo asset('img/login-bg/ba.jpg'); ?>" data-id="login-cover-image" alt="" />
                </div>
                <div class="news-caption">
                    <h4 class="caption-title"><i class=""></i>One Icon Microfinance</h4>
                    <p>
                        One Icon Microfinance, Registered®, and Company™. Karibuni wote, Mikopo nafuu na huduma za fedha.
                    </p>
                </div>
            </div>
            <!-- end news-feed -->
            <!-- begin right-content -->
            <div class="right-content">
                <!-- begin login-header -->
                <div class="login-header">
                    <div class="brand">
                        <div class="login-logo" style="text-align: center;"><img src="<?php echo asset('img/OneIcon.png'); ?>" width="130px" height="130px" alt="" /></div>
                        <h2>One Icon Microfinance</h2>
                        <small>Loans management system</small>
                    </div>
                </div>
                <!-- end login-header -->
                <!-- begin login-content -->
                <div class="login-content">

      <!--               <?php if($errors->any()): ?>
                        <div class="alert alert-danger">
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                <p><?php echo e($error); ?></p>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                        </div>
                    <?php endif; ?> -->
                    <?php if(session()->has('error')): ?>
                        <div class="alert alert-danger">                            
                            <p><?php echo e(session('error')); ?></p>                            
                        </div>
                    <?php endif; ?>
                    
                    <?php echo Form::open(['url' => 'login', 'method' => 'POST', 'class' => 'margin-bottom-0', 'autocomplete' => 'off']); ?>

                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                        <!-- <form action="" method="POST" class="margin-bottom-0"> -->
                            <div class="form-group m-b-15">
                                <input type="text" name="log" class="form-control input-lg" placeholder="Email Address" />
                                <?php if($errors->has('log')): ?>
                                    <p style="color:red;">User name or Email is required</p>
                                <?php endif; ?>
                            </div>
                            <div class="form-group m-b-15">
                                <input type="password" name="password" class="form-control input-lg" placeholder="Password" />
                                <?php if($errors->has('password')): ?>
                                    <p style="color:red;">Password is required is required</p>
                                <?php endif; ?>
                            </div>
                            <div class="checkbox m-b-30">
                                <label>
                                    <input type="checkbox" name="memory" /> Remember Me
                                </label>
                            </div>
                            <div class="login-buttons">
                                <button type="submit" class="btn btn-info btn-block btn-lg">Login</button>
                            </div>
                            <!-- <div class="m-t-20 m-b-40 p-b-40">
                                Not a member yet? Click <a href="register_v3.html" class="text-success">here</a> to register.
                            </div> -->
                            <hr />
                            <p class="text-center text-inverse">
                                &copy; One Icon Microfinance
                            </p>
                        <!-- </form> -->
                    <?php echo Form::close(); ?>

                </div>
                <!-- end login-content -->
            </div>
            <!-- end right-container -->
        </div>
        <!-- end login -->
        
        
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
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="<?php echo asset('js/apps.min.js'); ?>"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	
	<script>
		$(document).ready(function() {
			App.init();
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

<!-- Mirrored from seantheme.com/color-admin-v1.7/admin/html/form_elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Apr 2015 10:56:44 GMT -->
</html>

