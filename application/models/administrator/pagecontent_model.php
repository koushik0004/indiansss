<?php
if(!defined('BASEPATH')){exit('No direct Script Access Allowed!');}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of pagecontent_model
 *
 * @author win
 */
class pagecontent_model extends CI_Model{
    //put your code here
    function __construct(){
        parent:: __construct();
    }
    
    public function getAllPages(){
        $this->db->where('isblocked', '0');
        $this->db->where('isdeleted', '0');
        $query = $this->db->get('pagecontent');
        return $query->result();
    }
    
    public function getPageData($id=NULL){
        $this->db->where('id', $id);
        $query = $this->db->get('pagecontent');
        return $query->result();
    }
    
    public function updatePageData(){
        $data = array(
            'content_title'=>  $this->input->post('content_title'),
            'content'=>  addslashes($this->input->post('content')),
        );
        $this->db->where('id', $this->input->post('page_id'));
        $query = $this->db->update('pagecontent', $data);
        if($query === TRUE){
            return TRUE;
        }
        return FALSE;
    }
}

?>
