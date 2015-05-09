<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class db extends CI_Controller {
    /**
       Controller for Frontend index page and work.
     */
	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');

		$this->_init();
	}

	private function _init()
	{
		$this->output->set_template('default');
		$this->load->js('assets/themes/default/js/jquery-1.9.1.min.js');
		$this->load->js('http://cytoscape.github.io/cytoscape.js/api/cytoscape.js-latest/cytoscape.min.js');
		$this->load->js('assets/themes/default/js/custom.js');
		
		/*<link rel="stylesheet" href="plugins/chosen/chosen.min.css">
		<link rel="stylesheet" href="plugins/datatables/jquery.dataTables.css">
		<!-- /page level plugin styles -->
		
		<!-- core styles -->
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/animate.min.css">
    */
		
		
	}

	public function index()
	{
		$this->load->view('dineshdevkota/welcome');
	}
	public function warpedtour(){
	   $this->load->view('dineshdevkota/warpedtour');
	}

}
