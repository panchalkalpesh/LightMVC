<?php

/**
* This is default Controller
*/

class Home extends Controller
{
	
	function index()
	{
		$home=$this->model('server');
		$this->view('home/index', array('values'=>$home->getData()));
	}


}


?>