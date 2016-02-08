<?php
if(!defined('BASEPATH')){exit('No direct Script Access Allowed!');}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Allusers_Model extends CI_Model{
    function __construct() {
        parent::__construct();
    }
	
	public function getUserList(){
		$this->db->where('usergroup', 'endusers');
		$query = $this->db->get('users');
		return $query->result();
	}
	
	public function getUserListCount($start, $offset){
		$offset = ($offset != '')?$offset:0;
		$data_arr = array('usergroup'=>'endusers', 'is_deleted'=>'0');
		$this->db->limit($start, $offset);
		$this->db->where($data_arr);
		$query = $this->db->get('users');
		return $query->result();
	}
    
}
?>
