<?php

  namespace http;
  //controller class to connect models with views
  class controller {
  //this gets the HTML template for the application and accepts the model
    static public function getTemplate($template, $data = NULL) {
        $template = 'pages/' . $template . '.php';
        include $template;
    }
}