<?php
	// LIBS
	require_once 'vendor/autoload.php';
    require_once 'generated-conf/config.php';
    require_once 'php/controllers/FrontController.class.php';

	use App\Controllers\FrontController;
	
	$frontController = new FrontController();
/*
	$configuration = [
	    'settings' => [
	        'displayErrorDetails' => true,
	    ],
	];

	$c = new \Slim\Container($configuration);
	$c['errorHandler'] = function ($c) {
	    return new CustomErrorHandler();
	};
	$app = new \Slim\App($c);
	
	
	// FRONT CONTROLEUR	
	if (isset ($_GET ['page']))
	{
		$page = htmlspecialchars($_GET ['page']);
	}
	else
	{
		$page = "home";
	}
	
	if (isset ($_GET ['action'])) 
	{
		$action = htmlspecialchars($_GET ['action']);
	}
	else 
	{
		$action = "";
	}
		
	switch ($page) {
	    case "cart":
	    case "miniCart":
	 	case "client":
	    case "transaction" :
		case "catalog":
		case "connection":
    	case "account":
    	case "404" :
		case "inscription":
			require("php/$page.php");
			break;
		default:
	       require("php/home.php");
	    break;
	}
*/