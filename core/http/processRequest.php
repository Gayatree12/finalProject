<?php

  namespace http;

  class processRequest {
    //calculating response to a get or post request
    public static function createResponse() {

        $requested_route = processRequest::getRequestedRoute();
        $controller_name = $requested_route->controller;
        $controller_method = $requested_route->method;
        $controller_name::$controller_method();

    }
        public static function getRequestedRoute() {
             
        $request_method = request::getRequestMethod();
        $page = request::getPage();
        $action = request::getAction();
        //getting routes objects        
        $routes = \routes::getRoutes();
        $foundRoute = NULL;
        //this figures out which route matches the page being requested in the URL and returns it so that the controller and method can be called
        foreach ($routes as $route) {

            if ($route->page == $page && $route->http_method == $request_method && $route->action == $action) {
                $foundRoute = $route;
                break;
            }
        }
        if (is_null($foundRoute)) {
            controller::getTemplate('notfound');
            exit;
        } else {
            return $foundRoute;
        }
    }
}
