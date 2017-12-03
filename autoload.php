<?php

class manage {
	public static function core($class) {
		//useful to see what class and namespace is being asked for
		$path = 'core/' . str_replace('\\', '/', $class) . '.php';
		//useful to see what path is being asked for
		if(is_file($path)) {
			include $path;
			return;
		} 
	}

	public static function controllers($class) {
		//useful to see what class and namespace is being asked for
		$path = 'controllers/' . str_replace('\\', '/', $class) . '.php';
		//useful to see what path is being asked for
		if(is_file($path)) {
			include $path;
			return;
		} 
	}

	public static function models($class) {
		//useful to see what class and namespace is being asked for
		$path = 'models/' . str_replace('\\', '/', $class) . '.php';
		//useful to see what path is being asked for
		if(is_file($path)) {
			include $path;
			return;
		} 
	}
    
    public static function collections($class) {
		//useful to see what class and namespace is being asked for
		$path = 'collections/' . str_replace('\\', '/', $class) . '.php';
		//useful to see what path is being asked for
		if(is_file($path)) {
			include $path;
			return;
		} 
	}

	public static function routes($class) {
		//useful to see what class and namespace is being asked for
		$path = 'routes/' . str_replace('\\', '/', $class) . '.php';
		//useful to see what path is being asked for
		if(is_file($path)) {
			include $path;
			return;
		} 
	}
}

spl_autoload_register(array('manage','core'));
spl_autoload_register(array('manage','controllers'));
spl_autoload_register(array('manage','models'));
spl_autoload_register(array('manage','collections'));
spl_autoload_register(array('manage','routes'));