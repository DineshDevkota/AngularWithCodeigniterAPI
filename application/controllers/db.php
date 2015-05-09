<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DB extends CI_Controller {
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
	}

	public function index()
	{
		$this->load->view('dineshdevkota/welcome');
	}

}
