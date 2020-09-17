<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_RoomInsert extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_Room','ROOM');
	}
	

	public function Index()
	{

	}
    public function InsertRoom(){
        $room_id = $_POST['room_id'];
        $room_name = $_POST['room_name'];
        $query = $this->ROOM->InsertRoom($room_id,$room_name);
        redirect(base_url().'Home/index');
    }
    public function Show(){
        $query = $this->ROOM->Show_Data();
        echo json_encode($query);
    }

}
