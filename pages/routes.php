<?php

class routes {
	public static function getRoutes() {
		$route = new route();
		$route->http_method = 'GET';
		$route->page = 'homepage';
		$route->action = 'show';
		$route->controller = 'homepageController';
		$route->method = 'show';
		$route[] = $route;

		//index.php route for POST
		$route = new route();
		$route->http_method = 'POST';
		$route->page = 'homepage';
		$route->action = 'create';
		$route->controller = 'homepageController';
		$route->method = 'create';
		$route[] = $route;

		//POST for tasks to show a task
		$route = new route();
		$route->http_method = 'GET';
		$route->page = 'tasks';
		$route->action = 'show';
		$route->controller = 'tasksController';
		$route->method = 'show';
		$route[] = $route;

        //to list tasks
        $route = new route();
		$route->http_method = 'GET';
		$route->page = 'tasks';
		$route->action = 'all';
		$route->controller = 'tasksController';
		$route->method = 'all';
		$route[] = $route;

		//list all from accounts
		$route = new route();
		$route->http_method = 'GET';
		$route->page = 'accounts';
		$route->action = 'all';
		$route->controller = 'accountsController';
		$route->method = 'all';
		$route[] = $route;
        
        //show all records from accounts
        $route = new route();
		$route->http_method = 'GET';
		$route->page = 'accounts';
		$route->action = 'show';
		$route->controller = 'accountsController';
		$route->method = 'show';
		$route[] = $route;

		//for login form
		$route = new route();
		$route->http_method = 'POST';
		$route->page = 'accounts';
		$route->action = 'login';
		$route->controller = 'accountsController';
		$route->method = 'login';
		$route[] = $route;

		
        //create tasks
        $route = new route();
		$route->http_method = 'POST';
		$route->page = 'tasks';
		$route->action = 'create';
		$route->controller = 'tasksController';
		$route->method = 'create';
		$route[] = $route;

		//delete tasks
        $route = new route();
		$route->http_method = 'POST';
		$route->page = 'tasks';
		$route->action = 'delete';
		$route->controller = 'tasksController';
		$route->method = 'delete';
		$route[] = $route;

		//edit tasks
		$route = new route();
		$route->http_method = 'POST';
		$route->page = 'tasks';
		$route->action = 'edit';
		$route->controller = 'tasksController';
		$route->method = 'edit';
		$route[] = $route;
        
        return $routes;
	}
}