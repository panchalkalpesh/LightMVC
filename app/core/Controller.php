<?php 

/**
* This is the base controller
*/


class Controller
{
	function model($model){
		require_once '../app/models/'. $model . '.php';
		return new $model;
	}

	function view($view, $data=[]){
		if(file_exists('../app/views/'. $view . '.php')){
			require_once '../app/views/'. $view . '.php';
		}
	}
}


?>