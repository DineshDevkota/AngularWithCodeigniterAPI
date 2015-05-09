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
    
    public function PrettyPrintToJSON($queryResult){
        echo "<pre> ";
        echo json_encode($queryResult,JSON_PRETTY_PRINT);
        echo "</pre>";
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
    
    public function GetStageByWarpedTourID($id=False)
    {
        if(!$id){
            $this->PrettyPrintToJSON(Array());
            return json_encode(Array());
        }
        $this->db->select('*')
                    ->from('warpedtour_stage')
                    ->where('WarpedID', $id)
                    ->join('stage', 'stage.StageID=warpedtour_stage.StageID');
        $query = $this->db->get();
        $this->PrettyPrintToJSON($query->result());         
        return json_encode($query->result());
    }
    public function GetWarpedTourByStageID($id=False)
    {
        if(!$id){
            $this->PrettyPrintToJSON(Array());
            return json_encode(Array());
        }
        $this->db->select('*')
                    ->from('warpedtour_stage')
                    ->where('StageID', $id)
                    ->join('warpedtour', 'warpedtour.warpedID=warpedtour_stage.warpedID');
        $query = $this->db->get();
         $this->PrettyPrintToJSON($query->result());  
        return json_encode($query->result());
    }   
    public function GetOrganizerByWarpedTourID($id=False)
    {
        if(!$id){
            $this->PrettyPrintToJSON(Array());
            return json_encode(Array());
        }
        $this->db->select('*')
        ->from('warpedtour_organizer')
        ->where('WarpedID', $id)
        ->join('organizer', 'organizer.OrdID=warpedtour_organizer.OrgID');
        $query = $this->db->get();
        $this->PrettyPrintToJSON($query->result());
        return json_encode($query->result());
    }
    public function GetWarpedTourByOrganizerID($id=False)
    {
        if(!$id){
            $this->PrettyPrintToJSON(Array());
            return json_encode(Array());
        }
        $this->db->select('*')
        ->from('warpedtour_organizer')
        ->where('OrgID', $id)
        ->join('warpedtour', 'warpedtour.warpedID=warpedtour_organizer.warpedID');
        $query = $this->db->get();
        $this->PrettyPrintToJSON($query->result());
        return json_encode($query->result());
    }
    public function GetSponserByWarpedTourID($id=False)
    {
        if(!$id){
            $this->PrettyPrintToJSON(Array());
            return json_encode(Array());
        }
        $this->db->select('*')
        ->from('warpedtour_sponsor')
        ->where('WarpedID', $id)
        ->join('sponsor', 'sponsor.SponsorID=warpedtour_sponsor.SponsorID');
        $query = $this->db->get();
        $this->PrettyPrintToJSON($query->result());
        return json_encode($query->result());
    }
    public function GetWarpedTourBySponsorID($id=False)
    {
        if(!$id){
            $this->PrettyPrintToJSON(Array());
            return json_encode(Array());
        }
        $this->db->select('*')
        ->from('warpedtour_sponsor')
        ->where('SponsorID', $id)
        ->join('warpedtour', 'warpedtour.warpedID=warpedtour_sponsor.warpedID');
        $query = $this->db->get();
        $this->PrettyPrintToJSON($query->result());
        return json_encode($query->result());
    }
    public function GetBandByWarpedTourID($id=False)
    {
        if(!$id){
            $this->PrettyPrintToJSON(Array());
            return json_encode(Array());
        }
        $this->db->select('*')
        ->from('warpedtour_band')
        ->where('WarpedID', $id)
        ->join('band', 'band.BandID=warpedtour_band.BandID');
        $query = $this->db->get();
        $this->PrettyPrintToJSON($query->result());
        return json_encode($query->result());
    }
    public function GetWarpedTourByBandID($id=False)
    {
        if(!$id){
            $this->PrettyPrintToJSON(Array());
            return json_encode(Array());
        }
        $this->db->select('*')
        ->from('warpedtour_band')
        ->where('BandID', $id)
        ->join('warpedtour', 'warpedtour.warpedID=warpedtour_band.warpedID');
        $query = $this->db->get();
        $this->PrettyPrintToJSON($query->result());
        return json_encode($query->result());
    }
    public function GetSponsorByStageID($id=False)
    {
        if(!$id){
            $this->PrettyPrintToJSON(Array());
            return json_encode(Array());
        }
        $this->db->select('*')
        ->from('sponsor_stage')
        ->where('StageID', $id)
        ->join('sponsor', 'sponsor.SponsorID=sponsor_stage.SponsorID');
        $query = $this->db->get();
        $this->PrettyPrintToJSON($query->result());
        return json_encode($query->result());
    }
    public function GetStageBySponsorID($id=False)
    {
       if(!$id){
           $this->PrettyPrintToJSON(Array());
           return json_encode(Array());
       }
        $this->db->select('*')
        ->from('sponsor_stage')
        ->where('SponsorID', $id)
        ->join('stage', 'stage.StageID=sponsor_stage.StageID');
        $query = $this->db->get();
        $this->PrettyPrintToJSON($query->result());
        return json_encode($query->result());
    }
}