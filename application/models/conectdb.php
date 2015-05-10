<?php
class ConectDB extends CI_Model {
    
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
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
    
    
    public function GetWarpedTours()
    {
        $query = $this->db->get('warpedtour');
       
         
        return json_encode($query->result());
    }
    public function GetSponsors()
    {
        $query = $this->db->get('sponsor');       
        return json_encode($query->result());
    }
    public function GetStages()
    {
        $query = $this->db->get('stage');
       
        return json_encode($query->result());
    }
    public function GetAlbums()
    {
        $query = $this->db->get('album');
       
        return json_encode($query->result());
    }
    public function GetArtists()
    {
        $query = $this->db->get('artist');
       
        return json_encode($query->result());
    }
    public function GetBands()
    {
        $query = $this->db->get('band');
       
        return json_encode($query->result());
    }
    public function GetGenres()
    {
        $query = $this->db->get('genre');
       
        return json_encode($query->result());
    }
    public function GetOrganizers()
    {
        $query = $this->db->get('organizer');
       
        return json_encode($query->result());
    }
    public function GetRodies()
    {
        $query = $this->db->get('rodie');
       
        return json_encode($query->result());
    }
    public function GetSongs()
    {
        $query = $this->db->get('song');
       
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
       
        return json_encode($query->result());
    }
    public function GetAlbumsByBandID($id=False){
        if(!$id){
            $this->PrettyPrintToJSON(Array());
            return json_encode(Array());
        }
        $this->db->select('*')
        ->from('album')
        ->where('BandID', $id);
    
        $query = $this->db->get();
        
        return json_encode($query->result());
    }
    public function GetSongsByAlbumID($id=False){
        if(!$id){
            $this->PrettyPrintToJSON(Array());
            return json_encode(Array());
        }
        $this->db->select('*')
        ->from('song')
        ->where('AlbumID', $id);
    
        $query = $this->db->get();       
        return json_encode($query->result());
    }
    public function GetSongsByBandID($id=False){
        if(!$id){
            $this->PrettyPrintToJSON(Array());
            return json_encode(Array());
        }
        $this->db->select('*')
        ->from('song')
        ->where('BandID', $id);
    
        $query = $this->db->get();       
        return json_encode($query->result());
    }
    public function GetBandsByStageID($id=False){
        if(!$id){
            $this->PrettyPrintToJSON(Array());
            return json_encode(Array());
        }
        $this->db->select('*')
        ->from('band')
        ->where('StageID', $id);
    
        $query = $this->db->get();
        return json_encode($query->result());
    }
    public function GetSongsWithDetails(){
        $this->db->select('*')
        ->from('song')
        ->join('band', 'band.BandID=song.BandID')
        ->join('genre', 'genre.GenreID=band.GenreID')
        ->join('album', 'album.AlbumID=song.AlbumID');
        $query = $this->db->get();
        return json_encode($query->result());
    
    }
    
}