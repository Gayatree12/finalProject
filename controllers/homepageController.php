<?php

  class homepageController extends http\controller {

    public static function show() {
		
        $templateData['site_name'] = 'Todo Task Management Application';

		session_start();
		$templateData['userID'] = @$_SESSION["userID"];//running the session
		if($templateData['userID']) {
			header("Location: index.php?page=accounts&action=all");
		}		
      self::getTemplate('homepage', $templateData);
    }
    public static function create() {
		    print_r($_POST);
    }
}
