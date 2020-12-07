<?php 



class DREAMER_Controller{

	public $route;

	public function __construct(){
		$this->route = "../config/route.php";
		session_start();
	}

}

$DREAMER_Controller = new DREAMER_Controller();