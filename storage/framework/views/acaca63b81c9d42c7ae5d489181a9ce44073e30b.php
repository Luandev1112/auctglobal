<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">

<!-- Tell the browser to be responsive to screen width -->
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">


<meta name="description" content="<?php echo e(getSetting('meta_description', 'seo_settings')); ?>">
	<meta name="keywords" content="<?php echo e(getSetting('meta_keywords', 'seo_settings')); ?>">
<meta name="csrf_token" content="<?php echo e(csrf_token()); ?>">

<link rel="icon" href="<?php echo e(IMAGE_PATH_SETTINGS.getSetting('site_favicon', 'site_settings')); ?>" type="image/x-icon" />

<title>
	 <?php echo $__env->yieldContent('title'); ?>  <?php echo e(getSetting('site_title','site_settings')); ?> :: <?php echo e(isset($title) ? $title : ''); ?>


    
</title>



<?php echo $__env->yieldContent('header_scripts'); ?>
<link href="<?php echo e(CSS_BOOTSTRAP_ADMINLTE); ?>bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet"
      href="<?php echo e(CSS_ADMINLTE); ?>select2.min.css"/>
<link href="<?php echo e(CSS_ADMINLTE); ?>AdminLTE.min.css" rel="stylesheet">
<link href="<?php echo e(CSS_ADMINLTE); ?>custom.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="<?php echo e(CSS); ?>global-admin.css" rel="stylesheet">

<!-- <link href="<?php echo e(SKINS_CSS_ADMINLTE); ?>skin-blue.min.css" rel="stylesheet"> -->

<link href="<?php echo e(CSS); ?>sweetalert.css" rel="stylesheet" type="text/css">

<link href="<?php echo e(CSS); ?>admin.css" rel="stylesheet">


<link rel="stylesheet" href="<?php echo e(CSS_ADMINLTE_ONLINE); ?>jquery-ui.css">
<link rel="stylesheet" href="<?php echo e(CSS_ADMINLTE_ONLINE); ?>jquery.dataTables.min.css"/>
<link rel="stylesheet" href="<?php echo e(CSS_ADMINLTE_ONLINE); ?>select.dataTables.min.css"/>
<link rel="stylesheet" href="<?php echo e(CSS_ADMINLTE_ONLINE); ?>buttons.dataTables.min.css"/>
<link rel="stylesheet" href="<?php echo e(CSS_ADMINLTE_ONLINE); ?>jquery-ui-timepicker-addon.min.css"/>
<link rel="stylesheet" href="<?php echo e(CSS_ADMINLTE_ONLINE); ?>bootstrap-datepicker.standalone.min.css"/>







<!-- Font Awesome -->
<link rel="stylesheet" href="<?php echo e(CSS_ADMINLTE_ONLINE); ?>font-awesome.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="<?php echo e(CSS_ADMINLTE_ONLINE); ?>ionicons.min.css">


<!--admin custom css-->
<link href="<?php echo e(CSS); ?>admin-custom.css" rel="stylesheet">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->