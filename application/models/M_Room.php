<?php
class M_Room extends CI_Model{

    function __construct()
	{
	parent::__construct();
	//load Helper for Form
	$this->load->helper('url', 'form');	
	$this->load->library('form_validation','upload');
    }
    
    public function Show_Data(){
        $query = $this->db->get('room');
        return $query->result();
    }
    public function InsertRoom($room_id,$room_name){
        $query = $this->db->query("INSERT INTO room (Room_type_id,Room_type_name) VALUES (".$room_id.",'".$room_name."')");
        return $query;
    }
}