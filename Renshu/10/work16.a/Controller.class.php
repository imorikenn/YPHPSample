<?php
require_once("Session.class.php");
require_once("Request.class.php");
require_once("View.class.php");
require_once("Auth.class.php");
require_once("ErrorMessage.class.php");
require_once("Validation.class.php");

class Controller{
	public static $logic;
	public static $session;
	public static $request;
	public static $view;
	public static $auth;
	public static $errormessage;
	public static $validation;
	
	static function execute(){
		Controller::$session = new Session();
		Controller::$request = new Request();
		Controller::$view = new View();
		Controller::$auth = new Auth();
		Controller::$errormessage = new ErrorMessage();
		Controller::$validation = new Validation();
		Controller::$logic->setSession(Controller::$session);
		Controller::$logic->setRequest(Controller::$request);
		Controller::$logic->setView(Controller::$view);
		Controller::$logic->setAuth(Controller::$auth);
		Controller::$logic->setErrorMessage(Controller::$errormessage);
		Controller::$logic->setValidation(Controller::$validation);
		Controller::$logic->execute(Controller::$request->getAction());
		Controller::$view->show();
	}
	static function getTemplateName(){
		$action = controller::$request->getAction();
		$template_name = "work15-" . $action . ".php";
		return $template_name;
	}
	static function setLogic($logic){
		Controller::$logic = $logic;
	}
}
?>
