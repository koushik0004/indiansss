<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of galleries
 *
 * @author BAPI
 */
class galleries extends CI_Controller{
    //put your code here
     function __construct() {
        parent::__construct();
        $this->checkLoggedIn();
        $this->load->model(ADMIN.'gallery_model');
        
    }
    public function checkLoggedIn(){
        $isLogged = $this->session->userdata('is_logged_in_admin');
        if(!$isLogged || !isset($isLogged)){
            redirect(ADMIN.'login/', 'refresh');
        }
    }
    public function index(){
        $get_alldata = $this->gallery_model->getAllGalleries();
        //print_r($get_alldata->result());
        $data['all_galleries'] = $get_alldata->result();
        $data['content_for_layout'] = ADMIN.'gallery_index';
        $data['pagename'] = $this->uri->segment(2);
        $this->load->view(ADMIN.'template/dashbord_template', $data);
    }
    
    public function addnew(){
        $data['post_type'] = 'Add';
        //$data['parent_cat'] = $this->gallery_model->getPdfCategory();
        $data['post_method_name'] = 'addnewgallery';
        $data['content_for_layout'] = ADMIN.'gallery_add';
        $data['pagename'] = $this->uri->segment(2);
        $this->load->view(ADMIN.'template/dashbord_template', $data);
    }
    
    public function editgallery($id = NULL){
        $data['post_type'] = 'Edit';
        //$data['parent_cat'] = $this->gallery_model->getPdfCategory();
        $data['post_method_name'] = 'addnewgallery';
        $data['gallery_data'] = $this->gallery_model->getGalleryData($id);
        $data['content_for_layout'] = ADMIN.'gallery_add';
        $data['pagename'] = $this->uri->segment(2);
        $this->load->view(ADMIN.'template/dashbord_template', $data);
    }
    
    public function addnewgallery(){
        $result = $this->gallery_model->updateGalleryData();
        if($result === TRUE){
            $this->session->set_flashdata('Gallery Image saved succefully!');
            redirect(ADMIN.'galleries/', 'refresh');
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
        $query = $this->db->update('galleries', $update_arr);
        if($query==TRUE){
            $this->session->set_flashdata('Gallery status has been changed succefully!');
            redirect(ADMIN.'galleries/', 'refresh');
        }
    }
}

?>
