<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Issue_Model
 *
 * @author win
 */
class Issues_Model extends CI_Model{
    //put your code here
    function __construct() {
        parent::__construct();
    }
    
    public function getAllIssues(){
		$where_cond_array = array(
			'journals.isblocked'=>'0',
			'journals.isdeleted'=>'0',
			'journals.id >'=> '74'
		);
		
		$this->db->select('*');
		$this->db->from('journals');
		$this->db->join('pdfcategories ', 'journals.pdfcategory_id = pdfcategories.id');
		$this->db->where($where_cond_array);
        //$this->db->where('isblocked', '0');
        //$this->db->where('isdeleted', '0');
        $query = $this->db->get();
        return $query->result();
    }
	
	public function getCategoryAsVolume(){
		return array(
			'19'=>'Volume: VI No. 2 ',
			'21'=>'Volume: VII No. 1 ',
			'22'=>'Volume: VII No. 2 ',
			'24'=>'Volume: VIII No. 1 ',
			'25'=>'Volume: VIII No. 2 ',
			'27'=>'Volume: IX No. 1 ',
			'27'=>'Volume: IX No. 1 '
		);
	}

	public function getPdfById($id = NULL){
		 $query = $this->db->get_where('journals', array('id'=>$id, 'isblocked'=>'0'));
		if($query->num_rows()>0){
			return $query->result_array();
		}
		return FALSE;
	}
    
}

?>
