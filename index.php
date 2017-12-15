<?php
	session_start();

	// LIBS
    require_once 'app/controllers/FrontController.class.php';

	use App\Controllers\FrontController;
	
	$frontController = new FrontController();
