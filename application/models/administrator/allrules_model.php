<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of allrules_model
 *
 * @author win
 */
class allrules_model extends CI_Model{
    //put your code here
    function __construct() {
        parent::__construct();
    }
    public function getAllRules(){
        //$this->db->where('isblocked', '0');
        $this->db->where('isdeleted', '0');
        $query = $this->db->get('allrules');
        return $query->result();
    }
    public function getRuleData($id=NULL){
        $this->db->where('id', $id);
        $query = $this->db->get('allrules');
        return $query->result();
    }
    
    public function updateRuleData(){
        $data = array(
            'rules_title'=>  $this->input->post('rules_title'),
            'rules_content'=>  addslashes($this->input->post('rules_content')),
            'updated'=> date('Y-m-d H:i:s'),
        );
        $post_id = $this->input->post('rule_id');
        if(!empty($post_id) && $post_id !== NULL){
            $this->db->where('id', $this->input->post('rule_id'));
            $query = $this->db->update('allrules', $data);
        }
        else{
            $data['created'] = date('Y-m-d H:i:s');
            $query = $this->db->insert('allrules', $data);
        }
        
        if($query === TRUE){
            return TRUE;
        }
        return FALSE;
    }
}

?>
