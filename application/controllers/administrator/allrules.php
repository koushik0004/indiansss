<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of allrules
 *
 * @author win
 */
class allrules extends CI_Controller{
    //put your code here
    function __construct() {
        parent::__construct();
        $this->checkLoggedIn();
        $this->load->model(ADMIN.'allrules_model');
    }
     public function checkLoggedIn(){

            $isLogged = $this->session->userdata('is_logged_in_admin');

            if(!$isLogged || !isset($isLogged)){

                redirect(ADMIN.'login/', 'refresh');

            }

        }
    public function index(){
        $data['all_rules'] = $this->allrules_model->getAllRules();
        $data['content_for_layout'] = ADMIN.'allrules_index';
        $data['pagename'] = $this->uri->segment(2);
        $this->load->view(ADMIN.'template/dashbord_template', $data);
    }
    
    public function addnew(){
        $data['post_type'] = 'Add';
        $data['post_method_name'] = 'addnewrule';
        $data['content_for_layout'] = ADMIN.'allrules_add';
        $data['pagename'] = $this->uri->segment(2);
        $this->load->view(ADMIN.'template/dashbord_template', $data);
    }
    
    public function editrule($id = NULL){
        $data['post_type'] = 'Edit';
        $data['post_method_name'] = 'addnewrule';
        $data['ruledate'] = $this->allrules_model->getRuleData($id);
        $data['content_for_layout'] = ADMIN.'allrules_add';
        $data['pagename'] = $this->uri->segment(2);
        $this->load->view(ADMIN.'template/dashbord_template', $data);
    }
    
    public function addnewrule(){
        $result = $this->allrules_model->updateRuleData();
        if($result === TRUE){
            $this->session->set_flashdata('Rules saved succefully!');
            redirect(ADMIN.'allrules/', 'refresh');
        }
    }
    
    public function changeState($id = NULL){
        $ruleid = $this->uri->segment(4);
        $stat = $this->uri->segment(5);
        //$landing_page = $this->uri->segment(6);
        $update_arr = array(
                                        'isblocked'=>$stat
                                );

        $this->db->where('id', $ruleid);
        $query = $this->db->update('allrules', $update_arr);
        if($query==TRUE){
            $this->session->set_flashdata('Rules status has been changed succefully!');
            redirect(ADMIN.'allrules/', 'refresh');
        }
    }
}

?>
