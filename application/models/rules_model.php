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
class Rules_Model extends CI_Model{
    //put your code here
    function __construct() {
        parent::__construct();
    }
    
    public function getAllRules(){
        $this->db->where('isblocked', '0');
        $this->db->where('isdeleted', '0');
        $query = $this->db->get('allrules');
        return $query->result();
    }
    
}

?>
