<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of pdfcategory
 *
 * @author win
 */
class pdfcategory extends CI_Controller{
    //put your code here
    function __construct() {
        parent::__construct();
        $this->checkLoggedIn();
        $this->load->model(ADMIN.'pdfcategory_model');
    }
     public function checkLoggedIn(){
            $isLogged = $this->session->userdata('is_logged_in_admin');
            if(!$isLogged || !isset($isLogged)){
                redirect(ADMIN.'login/', 'refresh');
            }
        }
     public function index(){
        $get_alldata = $this->pdfcategory_model->getAllPdfCategory();
        //print_r($get_alldata->result());
        $data['all_pdfcategory'] = $get_alldata->result();
        $data['content_for_layout'] = ADMIN.'pdfcategory_index';
        $data['pagename'] = $this->uri->segment(2);
        $this->load->view(ADMIN.'template/dashbord_template', $data);
    }
    
    public function addnew(){
        $data['post_type'] = 'Add';
        $data['parent_cat'] = $this->pdfcategory_model->getParentPdfCategory();
        $data['post_method_name'] = 'addnewpdfcategory';
        $data['content_for_layout'] = ADMIN.'pdfcategory_add';
        $data['pagename'] = $this->uri->segment(2);
        $this->load->view(ADMIN.'template/dashbord_template', $data);
    }
    
    public function editpdfcategory($id = NULL){
        $data['post_type'] = 'Edit';
        $data['parent_cat'] = $this->pdfcategory_model->getParentPdfCategory();
        $data['post_method_name'] = 'addnewpdfcategory';
        $data['pdgcategory_data'] = $this->pdfcategory_model->getPdfCategoryData($id);
        $data['content_for_layout'] = ADMIN.'pdfcategory_add';
        $data['pagename'] = $this->uri->segment(2);
        $this->load->view(ADMIN.'template/dashbord_template', $data);
    }
    
    public function addnewpdfcategory(){
        $result = $this->pdfcategory_model->updatePdfCategoryData();
        if($result === TRUE){
            $this->session->set_flashdata('Journal category saved succefully!');
            redirect(ADMIN.'pdfcategory/', 'refresh');
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
        $query = $this->db->update('pdfcategories', $update_arr);
        if($query==TRUE){
            $this->session->set_flashdata('Journal category status has been changed succefully!');
            redirect(ADMIN.'pdfcategory/', 'refresh');
        }
    }
}

?>
