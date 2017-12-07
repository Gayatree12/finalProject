<?php

/*Created by using Sublime Text
  User: gt86
*/

//adding routes
//matches URLs and request methods with the controller and method

class routes {
	
	public static function getRoutes() {
        //index.php route for GET
		$route = new route();
		$route->http_method = 'GET';
		$route->page = 'homepage';
		$route->action = 'show';
		$route->controller = 'homepage';
		$route->method = 'show';
		$route[] = $route;

		//index.php route for POST
		$route = new route();
		$route->http_method = 'POST';
		$route->page = 'homepage';
		$route->action = 'create';
		$route->controller = 'homepage';
		$route->method = 'create';
		$route[] = $route;

		//to show a task
		$route = new route();
		$route->http_method = 'GET';
		$route->page = 'tasks';
		$route->action = 'show';
		$route->controller = 'tasks';
		$route->method = 'show';
		$route[] = $route;

        //to list tasks
        $route = new route();
		$route->http_method = 'GET';
		$route->page = 'tasks';
		$route->action = 'all';
		$route->controller = 'tasks';
		$route->method = 'all';
		$route[] = $route;

		//list all from accounts
		$route = new route();
		$route->http_method = 'GET';
		$route->page = 'accounts';
		$route->action = 'all';
		$route->controller = 'accounts';
		$route->method = 'all';
		$route[] = $route;
        
        //show all records from accounts
        $route = new route();
		$route->http_method = 'GET';
		$route->page = 'accounts';
		$route->action = 'show';
		$route->controller = 'accounts';
		$route->method = 'show';
		$route[] = $route;

		//for login form
		$route = new route();
		$route->http_method = 'POST';
		$route->page = 'accounts';
		$route->action = 'login';
		$route->controller = 'accounts';
		$route->method = 'login';
		$route[] = $route;
		
        //create tasks
        $route = new route();
		$route->http_method = 'POST';
		$route->page = 'tasks';
		$route->action = 'create';
		$route->controller = 'tasks';
		$route->method = 'create';
		$route[] = $route;

		//delete tasks
        $route = new route();
		$route->http_method = 'POST';
		$route->page = 'tasks';
		$route->action = 'delete';
		$route->controller = 'tasks';
		$route->method = 'delete';
		$route[] = $route;

		//edit tasks
		$route = new route();
		$route->http_method = 'POST';
		$route->page = 'tasks';
		$route->action = 'edit';
		$route->controller = 'tasks';
		$route->method = 'edit';
		$route[] = $route;
        
    return $routes;
	}

	public static function create($http_method,$action,$page,$controller,$method) {
		$route = new route();
		$route->http_method = $http_method;
		$route->page = $page;
		$route->action = $action;
		$route->controller = $controller;
		$route->method = $method;

	}
}

class route {
	public $page;
	public $action;
	public $method;
	public $controller;
}