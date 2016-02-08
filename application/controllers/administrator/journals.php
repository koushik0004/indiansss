<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of journals
 *
 * @author win
 */
class journals extends CI_Controller{
    //put your code here
    function __construct() {
        parent::__construct();
        $this->checkLoggedIn();
        $this->load->model(ADMIN.'journals_model');
        
    }
    public function checkLoggedIn(){
        $isLogged = $this->session->userdata('is_logged_in_admin');
        if(!$isLogged || !isset($isLogged)){
            redirect(ADMIN.'login/', 'refresh');
        }
    }
    public function index(){
        $get_alldata = $this->journals_model->getAllJournals();
        //print_r($get_alldata->result());
        $data['all_journals'] = $get_alldata->result();
        $data['content_for_layout'] = ADMIN.'journals_index';
        $data['pagename'] = $this->uri->segment(2);
        $this->load->view(ADMIN.'template/dashbord_template', $data);
    }
    
    public function addnew(){
        $data['post_type'] = 'Add';
        $data['parent_cat'] = $this->journals_model->getPdfCategory();
        $data['post_method_name'] = 'addnewjournals';
        $data['content_for_layout'] = ADMIN.'journals_add';
        $data['pagename'] = $this->uri->segment(2);
        $this->load->view(ADMIN.'template/dashbord_template', $data);
    }
    
    public function editjournals($id = NULL){
        $data['post_type'] = 'Edit';
        $data['parent_cat'] = $this->journals_model->getPdfCategory();
        $data['post_method_name'] = 'addnewjournals';
        $data['journal_data'] = $this->journals_model->getJournalsData($id);
        $data['content_for_layout'] = ADMIN.'journals_add';
        $data['pagename'] = $this->uri->segment(2);
        $this->load->view(ADMIN.'template/dashbord_template', $data);
    }
    
    public function addnewjournals(){
        $result = $this->journals_model->updateJournalData();
        if($result === TRUE){
            $this->session->set_flashdata('Journal category saved succefully!');
            redirect(ADMIN.'journals/', 'refresh');
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
        $query = $this->db->update('journals', $update_arr);
        if($query==TRUE){
            $this->session->set_flashdata('Journal category status has been changed succefully!');
            redirect(ADMIN.'journals/', 'refresh');
        }
    }
}

?>
