<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class dbApi extends CI_Controller {
    
    //constructor for database
    public function __construct() {
        parent::__construct();
        $this->load->model("ConectDB");
    }

	/*
	 * Controller for backend API. To be consumed by AngularJS
	 * $this->load->helper ( 'url' );
		$this->load->library ( '' );		
		$this->load->database ();
		$this->db->where('email=',"dinesh.devkota@selu.edu");
		$query=$this->db->get ( 'accounts' );
		$result=$query->result ();
		$id=$result[0]->id;	
		$user_id=$result[0]->user_id;
		$query = $this->db->get ( 'firesale_gateway_settings' );
		foreach ( $query->result () as $row ) {
			switch ($row->key) {
				case "username" :
					$this->config ['USER'] = $row->value;
					break;
				case "password" :
					$this->config ['PWD'] = $row->value;
					break;
				case "vendor" :
					$this->config ['VENDOR'] = $row->value;
					break;
				case "partner" :
					$this->config ['PARTNER'] = $row->value;
					break;
				case "test_mode" :
					switch ($row->value) {
						case "1" :
							$this->config ["TestMode"] = TRUE;
							break;
						default :
							$this->config ["TestMode"] = FALSE;
					}
					break;
			}
		}
	}
	 */
	public function index()
	{
	   
		$arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);
           echo json_encode($arr);
	}
	
}