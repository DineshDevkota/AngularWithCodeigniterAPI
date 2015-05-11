<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class db extends CI_Controller {
    /**
       Controller for Frontend index page and work.
       Author:Dinesh Devkota
       Consumed the dbApi as connectdb model in the project
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
		$this->load->view('navviews/welcome');
	}
	public function warpedtour(){
	    $data=json_decode($this->ConectDB->GetWarpedTours());
	    $viewvalue=array('data'=>$data);  
	   $this->load->view('navviews/warpedtour',$viewvalue);
	}
	public function artist(){
	    $data=json_decode($this->ConectDB->GetArtistsWithDetails());
	    $viewvalue=array('data'=>$data);
	    $this->load->view('navviews/artist',$viewvalue);
	}
	 public function band(){
	     $data=json_decode($this->ConectDB->GetBands());
	     $viewvalue=array('data'=>$data);
	     $this->load->view('navviews/bands',$viewvalue);
	 }
	 public function genre(){
	     $data=json_decode($this->ConectDB->GetGenres());
	     $viewvalue=array('data'=>$data);
	     $this->load->view('navviews/genre',$viewvalue);
	 }
	 public function sponsor(){
	     $data=json_decode($this->ConectDB->GetSponsors());
	     $viewvalue=array('data'=>$data);
	     $this->load->view('navviews/sponsor',$viewvalue);
	 }
	 public function album(){
	     $data=json_decode($this->ConectDB->GetAlbums());
	     $viewvalue=array('data'=>$data);
	     $this->load->view('navviews/album',$viewvalue);
	 }
	 public function proview(){
	     $data=json_decode($this->ConectDB->GetSongsWithDetails());
	     $viewvalue=array('data'=>$data);
	     $this->load->view('navviews/proview',$viewvalue);
	     
	 }
	 public function GetStageByWarpedTourID($id=false){
	     if(!$id){
	         show_404();
	     }else{
	         $data=json_decode($this->ConectDB->GetStageByWarpedTourID($id));
	         $viewvalue=array('data'=>$data);
	         $this->load->view('dynamicviews/stagesbywarpedtour',$viewvalue);
	     }
	 }
	 public function GetOrganizerByWarpedTourID($id=false){
	     if(!$id){
	         show_404();
	     }else{
	         $data=json_decode($this->ConectDB->GetOrganizerByWarpedTourID($id));
	         $viewvalue=array('data'=>$data);
	         $this->load->view('dynamicviews/organizerbywarpedtour',$viewvalue);
	     }
	 }
	 public function GetSponserByWarpedTourID($id=false){
	     if(!$id){
	         show_404();
	     }else{
	         $data=json_decode($this->ConectDB->GetSponserByWarpedTourID($id));
	         $viewvalue=array('data'=>$data);
	         $this->load->view('navviews/sponsor',$viewvalue);
	     }
	 }
	 public function GetBandByWarpedTourID($id=false){
	     if(!$id){
	         show_404();
	     }else{
	         $data=json_decode($this->ConectDB->GetBandAndGenreByWarpedTourID($id));
	         $viewvalue=array('data'=>$data);
	         $this->load->view('dynamicviews/bandbywarpedtourorgnizer',$viewvalue);
	     }
	 }
	 public function GetAlbumsByBandID($id=false){
	     if(!$id){
	         show_404();
	     }else{
	         $data=json_decode($this->ConectDB->GetAlbumsByBandID($id));
	         $viewvalue=array('data'=>$data);
	         $this->load->view('dynamicviews/AlbumsByBandID',$viewvalue);
	     }
	 }
	 
	 public function GetSongsByAlbumID($id=false){
	     if(!$id){
	         show_404();
	     }else{
	         $data=json_decode($this->ConectDB->GetSongsWithDetailsByAlbumID($id));
	         $viewvalue=array('data'=>$data);
	         $this->load->view('dynamicviews/SongsByAlbumID',$viewvalue);
	     }
	 }
	 public function GetBandsByStageID($id=false){
	     if(!$id){
	         show_404();
	     }else{
	         $data=json_decode($this->ConectDB->GetBandsByStageID($id));
	         $viewvalue=array('data'=>$data);
	         $this->load->view('dynamicviews/BandsByStageID',$viewvalue);
	     }
	 }
}
