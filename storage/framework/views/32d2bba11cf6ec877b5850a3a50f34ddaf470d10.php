<!DOCTYPE html>
<html lang="en" >

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="keywords" content="">
	 
	<link rel="icon" href="#" type="image/x-icon" />
	
	<title><?php echo e(isset($title) ? $title : 'Global Auction system'); ?></title>

	

	<link href="<?php echo e(CSS_HOME_ONLINE); ?>googleapis.css" rel="stylesheet">
	<link href="<?php echo e(CSS_HOME_ONLINE); ?>googleapis_rammetto.css" rel="stylesheet">
	<link href="<?php echo e(CSS_HOME_ONLINE); ?>font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo e(CSS_HOME_ONLINE); ?>pe-icon-7-stroke.min.css" rel="stylesheet">

	<!-- Bootstrap Core CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo e(CSS_HOME); ?>bootstrap.min.css">


	<link rel="stylesheet" type="text/css" href="<?php echo e(CSS_HOME); ?>animate.css">
	<link rel="stylesheet" type="text/css" href="<?php echo e(CSS_HOME); ?>font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo e(CSS_HOME); ?>bootstrap.offcanvas.css">
	<link rel="stylesheet" type="text/css" href="<?php echo e(CSS_HOME); ?>stroke-gap-icons.css">


	<link rel="stylesheet" type="text/css" href="<?php echo e(CSS_HOME); ?>style.css">
	<link rel="stylesheet" href="<?php echo e(CSS_ADMINLTE); ?>select2.min.css"/>
	<link href="<?php echo e(CSS); ?>sweetalert.css" rel="stylesheet" type="text/css">

	<link href="<?php echo e(CSS); ?>global-admin.css" rel="stylesheet" type="text/css">

	<link rel="stylesheet" type="text/css" href="<?php echo e(CSS_HOME); ?>sb-admin.css">


	<?php echo $__env->yieldContent('header_scripts'); ?>
	<!-- Custom CSS -->
	<!-- <link href="<?php echo e(CSS); ?>sb-admin.css" rel="stylesheet"> -->
	<!-- Morris Charts CSS -->
	<!-- <link href="<?php echo e(CSS); ?>plugins/morris.css" rel="stylesheet"> -->
	<!-- Proxima Nova Fonts CSS -->
	<!-- <link href="<?php echo e(CSS); ?>proximanova.css" rel="stylesheet"> -->
	<!-- Custom Fonts -->
	<!-- <link href="<?php echo e(CSS); ?>custom-fonts.css" rel="stylesheet" type="text/css"> -->
	<!-- <link href="<?php echo e(CSS); ?>materialdesignicons.css" rel="stylesheet" type="text/css"> -->
	<!-- <link href="<?php echo e(FONTAWSOME); ?>font-awesome.min.css" rel="stylesheet" type="text/css"> -->
	<!-- <link href="<?php echo e(CSS); ?>sweetalert.css" rel="stylesheet" type="text/css"> -->
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


  

</head>

<body class="login-screen" ng-app="academia" >


	<?php echo $__env->yieldContent('content'); ?>
	

		<!-- /#wrapper -->
		<!-- jQuery -->
		<script src="<?php echo e(JS_HOME); ?>jquery-2.1.1.min.js"></script>


		<script src="<?php echo e(JS_HOME_ONLINE); ?>popper.min.js" crossorigin="anonymous"></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="<?php echo e(JS_HOME); ?>bootstrap.min.js"></script>

		
		<!--JS Control-->
		<script src="<?php echo e(JS_HOME); ?>wow.min.js"></script>
		<script src="<?php echo e(JS_HOME); ?>index.js"></script>
		<script src="<?php echo e(JS_HOME); ?>main.js"></script>
		<script src="<?php echo e(JS); ?>sweetalert-dev.js"></script>
		<?php echo $__env->make('errors.formMessages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<?php echo $__env->yieldContent('footer_scripts'); ?>
</body>

</html>