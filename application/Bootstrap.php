<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
	public function _initRoutes()
	{	
		$frontController = Zend_Controller_Front::getInstance();
		$router = $frontController->getRouter();
		
		$route = new Zend_Controller_Router_Route_Static(
			'login',
			array('controller'=>'Account', 'action'=>'login')
		);
	
		$router->addRoute('login', $route);
	}	

}

