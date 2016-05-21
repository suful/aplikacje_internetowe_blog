<?php
session_start();
	// Turn off all error reporting
	error_reporting(0);
	
	if(isset($_GET['task'])){

	if($_GET['task']=='categories')
	{
		include 'controller/categories.php';
		$ob = new CategoriesController();
		$ob->$_GET['action']();
	} 
	else if($_GET['task']=='articles') 
	{
		include 'controller/articles.php';
		$ob = new ArticlesController();
		$ob->$_GET['action']();
	} 
	else if($_GET['task']=='galeria') 
	{
		include 'controller/galeria.php';
		$ob = new GaleriaController();
		$ob->$_GET['action']();
	} 
	else if($_GET['task']=='rejestracja') 
	{
		include 'controller/rejestracja.php';
		$ob = new RejestracjaController();
		$ob->$_GET['action']();
	} 
	else if($_GET['task']=='logowanie') 
	{
		include 'controller/logowanie.php';
		$ob = new LogowanieController();
		$ob->$_GET['action']();
	} 
	else if($_GET['task']=='wyloguj') 
	{
		$_SESSION['logged'] = false;
		header('Location:index.php');
		session_destroy();
		
	}
	
	}
	else 
	{
		include 'controller/galeria.php';
		$ob = new GaleriaController();
		$ob->index();
	}

?>
