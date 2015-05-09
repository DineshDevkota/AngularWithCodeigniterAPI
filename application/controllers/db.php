<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class db extends CI_Controller {
    /**
       Controller for Frontend index page and work.
     */
	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->model("ConectDB");

		$this->_init();
	}

	private function _init()
	{
		$this->output->set_template('default');
			
	}

	public function index()
	{
		$this->load->view('dineshdevkota/welcome');
	}
	public function warpedtour(){
	    $data=json_decode($this->ConectDB->GetWarpedTours());
	    $viewvalue=array('data'=>$data);  
	   $this->load->view('dineshdevkota/warpedtour',$viewvalue);
	}
	public function artist(){
	    $data=json_decode($this->ConectDB->GetArtists());
	    $viewvalue=array('data'=>$data);
	    $this->load->view('dineshdevkota/artist',$viewvalue);
	}
	 public function band(){
	     $data=json_decode($this->ConectDB->GetBands());
	     $viewvalue=array('data'=>$data);
	     $this->load->view('dineshdevkota/bands',$viewvalue);
	 }

}
