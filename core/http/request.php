<?php

  namespace http;

  class request {
    
    static public function getRequestMethod() {
        
        $request_method = $_SERVER['REQUEST_METHOD'];
        return $request_method;
    }
    
    static public function getPage() {
    //sets the default page for the app to index
        $page = 'homepage';

    //to check if page is set
        if (!empty($_GET['page'])) {
            $page = $_GET['page'];
        }
        return $page;
    }

    //this gets the action out of the URL
    static public function getAction() {

        if (self::getRequestMethod() == 'POST') {
            $action = 'create';
        } else {
            $action = 'show';
        }
        if (!empty($_GET['action'])) {
            $action = $_GET['action'];
        }
        return $action;
    }
}