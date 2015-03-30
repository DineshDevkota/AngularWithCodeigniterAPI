<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class dbApi extends CI_Controller {

	/*
	 * Controller for backend API. To be consumed by AngularJS
	 */
	public function index()
	{
		$arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);
           echo json_encode($arr);
	}
	
	
	
	
	
}