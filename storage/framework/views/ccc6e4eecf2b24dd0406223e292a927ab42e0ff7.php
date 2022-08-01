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



<link href="<?php echo e(CSS_HOME_ONLINE); ?>googleapis.css" rel="stylesheet">
<link href="<?php echo e(CSS_HOME_ONLINE); ?>googleapis_rammetto.css" rel="stylesheet">
<link href="<?php echo e(CSS_HOME_ONLINE); ?>font-awesome.min.css" rel="stylesheet">
<link href="<?php echo e(CSS_HOME_ONLINE); ?>pe-icon-7-stroke.min.css" rel="stylesheet">

<!--link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,400i,600,700,900" rel="stylesheet"-->
<!--link href="https://fonts.googleapis.com/css?family=Rammetto+One" rel="stylesheet"-->
<!--link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"-->
<!--link href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css" rel="stylesheet"-->


<link rel="stylesheet" type="text/css" href="<?php echo e(CSS_HOME); ?>bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo e(CSS_HOME); ?>animate.css">
<link rel="stylesheet" type="text/css" href="<?php echo e(CSS_HOME); ?>font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo e(CSS_HOME); ?>bootstrap.offcanvas.css">
<link rel="stylesheet" type="text/css" href="<?php echo e(CSS_HOME); ?>stroke-gap-icons.css">

<link rel="stylesheet" type="text/css" href="<?php echo e(CSS_HOME); ?>style.css">
<link rel="stylesheet" href="<?php echo e(CSS_ADMINLTE); ?>select2.min.css"/>
<link href="<?php echo e(CSS); ?>sweetalert.css" rel="stylesheet" type="text/css">

<link href="<?php echo e(CSS); ?>global-admin.css" rel="stylesheet" type="text/css">



<link rel="stylesheet" type="text/css" href="<?php echo e(JS_HOME); ?>slider/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo e(JS_HOME); ?>slider/owl.theme.default.min.css">


<!-- <link href="<?php echo e(CSS_HOME); ?><?php echo e(getSetting('theme_color','site_settings')); ?>" id="style_theme" rel="stylesheet"> -->

<link href="<?php echo e(CSS_HOME); ?><?php echo e(getActiveTheme()); ?>" id="style_theme" rel="stylesheet">

<link href="<?php echo e(CSS_HOME); ?>datatables.min.css" rel="stylesheet">



<!--alertify-->
<link rel="stylesheet" href="<?php echo e(ALERTIFY); ?>css/themes/bootstrap.css">
<link rel="stylesheet" href="<?php echo e(ALERTIFY); ?>css/alertify.min.css">
<link rel="stylesheet" href="<?php echo e(ALERTIFY); ?>css/themes/default.css">
<link rel="stylesheet" href="<?php echo e(ALERTIFY); ?>css/themes/alertify.core.css">







<?php echo $__env->yieldContent('header_scripts'); ?>

<!-- 
<link rel="stylesheet"
      href="https://code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css"> -->
<!-- <link rel="stylesheet"
      href="//cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css"/> -->
<!-- <link rel="stylesheet"
      href="https://cdn.datatables.net/select/1.2.0/css/select.dataTables.min.css"/> -->
<!-- <link rel="stylesheet"
      href="//cdn.datatables.net/buttons/1.2.4/css/buttons.dataTables.min.css"/> -->
<!-- <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.4.5/jquery-ui-timepicker-addon.min.css"/>
<link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.standalone.min.css"/> -->




