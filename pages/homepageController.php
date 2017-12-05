<?php
//controller for index page
class homepageController extends http\controller {
    //show method to show the sites name
	public static funtion show() {
    
      $templateData['site_name'] = 'mysite';
      self::getTemplate('homepage',$templateData);
	}

	public static function create() {
	//add a record
		print_r($_POST); //print the record
	}
}