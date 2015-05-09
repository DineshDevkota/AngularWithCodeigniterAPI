<?php

if (! defined('BASEPATH'))
    exit('No direct script access allowed');

class dbApi extends CI_Controller
{
    
    // constructor for database
    public function __construct()
    {
        parent::__construct();
        $this->load->model("ConectDB");
    }

    public function Index()
    {
        $arr = array(
            'BUDDY' => 1,
            'YOU' => 2,
            'ARE' => 3,
            'IN' => 4,
            'WRONG' => 5,
            'PLACE' => 6
        );
        echo json_encode($arr);
    }

    public function GetWarpedTour()
    {
        $query = $this->db->get('warpedtour');    
        $this->PrettyPrintToJSON($query->result());   
               
        return json_encode($query->result());
    }
    public function GetStage()
    {
        $query = $this->db->get('stage'); 
        $this->PrettyPrintToJSON($query->result());  
        return json_encode($query->result());
    }
    
    public function GetStageByWarpedTourID($id)
    {
        $this->db->select('*')
                    ->from('warpedtour_stage')
                    ->where('WarpedID', $id)
                    ->join('stage', 'stage.StageID=warpedtour_stage.StageID');
        $query = $this->db->get();
        $this->PrettyPrintToJSON($query->result());         
        return json_encode($query->result());
    }
    public function GetWarpedTourByStageID($id)
    {
        $this->db->select('*')
                    ->from('warpedtour_stage')
                    ->where('StageID', $id)
                    ->join('warpedtour', 'warpedtour.warpedID=warpedtour_stage.warpedID');
        $query = $this->db->get();
         $this->PrettyPrintToJSON($query->result());  
        return json_encode($query->result());
    }
    
    public function PrettyPrintToJSON($queryResult){
        echo "<pre> ";
        echo json_encode($queryResult,JSON_PRETTY_PRINT);
        echo "</pre>";
    }
    
}