<?php
class user_model extends CI_Model {
	function create($formArray){

		$this->db->insert('users',$formArray);
	}
}
