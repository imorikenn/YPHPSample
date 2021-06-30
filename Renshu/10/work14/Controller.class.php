<?php
require_once("Controller.class.php");
require_once("Request.class.php");
require_once("View.class.php");


class Controller{
	public static $logic;
	public static $session;
	public static $request;
	public static $view;
	//コントローラーのメインの実行メソッド
	static function execute(){
		self::$session = new Session();
		self::$request = new Request();
		self::$view = new View();
		self::$logic->setSession(Controller::$session);
		self::$logic->setRequest(Controller::$request);
		self::$logic->setView(Controller::$view);
		//ロジッククラスの実行
		self::$logic->execute(Controller::$request->getAction());
		//VIEWクラスを通してHTMLを表示する
		self::$view->show();
	}
	static function getTemplateName(){
		$action = self::$request->getAction();
		$template_name = "work14-" . $action . ".php";
		return $template_name;
	}
	static function getLogic($logic){
		self::$logic = $logic;
	}
}
?>