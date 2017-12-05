<?php

//accountsController page extending controller
class accountsController extends http\controller {
	//each methods named an action
	//show records by its id
	public static function show() {
		$records = accounts::findOne($_REQUEST['id']);
		self::getTemplate('show_accounts', $records);
	}
    //show all records
	public static function all() {
		$records = accounts::findAll();
		self::getTemplate('all_accounts', $records);
	} 
 
}