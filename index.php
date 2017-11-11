<?php
	// LIBS
	require_once 'vendor/autoload.php';
    require_once 'generated-conf/config.php';
    require_once 'app/controllers/FrontController.class.php';

	use App\Controllers\FrontController;
	/*
    // SMARTY
	$smarty = new Smarty ();
	
	$smarty->template_dir = 'templates/';
	$smarty->compile_dir = 'templates_c/';
	$smarty->config_dir = 'configs/';
	$smarty->cache_dir = 'cache/';*/
	
	$frontController = new FrontController();
