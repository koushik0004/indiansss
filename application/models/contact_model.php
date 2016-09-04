<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Rules_Model
 *
 * @author win
 */
class Contact_Model extends CI_Model{
    //put your code here
    function __construct() {
        parent::__construct();
    }
    
    public function getContentByPage($pagename = NULL){
        $this->db->where('isblocked', '0');
        $this->db->where('isdeleted', '0');
        $this->db->like('page_name', $pagename, 'both');
        $query = $this->db->get('pagecontent');
        return $query->result_array();
    }
    
}

?>
