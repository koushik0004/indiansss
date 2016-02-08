<?php 
if(!defined('BASEPATH')){exit('No direct Script Access Allowed!');}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
 class Home_Model extends CI_Model{
    function __construct() {
        parent::__construct();
    }
	
	public function getLinks(){
		$query = $this->db->get_where('ref_links', array('status'=>'1'));
		
		if($query->num_rows()>0){
			return $query->result();
		}
	}
        
        public function getPageContent(){
            $query = $this->db->get('pagecontent', array('page_name'=>'home', 'isblocked'=>'0'));
            if($query->num_rows()>0){
                return $query->result();
            }
            return FALSE;
        }
        
        public function getCurrentIssue(){
            $query = $this->db->get_where('pagecontent', array('id'=>'2', 'isblocked'=>'0'));
            if($query->num_rows()>0){
                return $query->result();
            }
            return FALSE;
        }
 }