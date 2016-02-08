<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pagecontent
 *
 * @author win
 */
class Pagecontent extends CI_Controller{
    //put your code here
    function __construct(){
        parent::__construct();
        $this->load->model(ADMIN.'pagecontent_model');
        $this->checkLoggedIn();
    }
    
    public function checkLoggedIn(){

            $isLogged = $this->session->userdata('is_logged_in_admin');

            if(!$isLogged || !isset($isLogged)){

                redirect(ADMIN.'login/', 'refresh');

            }

        }
     
    public function add(){
         $data['content_for_layout'] = ADMIN.'postedit';
         $data['pagename'] = $this->uri->segment(2);
         $this->load->view(ADMIN.'template/dashbord_template', $data);
     }
     
    public function index(){
        $data['tot_pages'] = $this->pagecontent_model->getAllPages();
        $data['content_for_layout'] = ADMIN.'pagecontent_index';
        $data['pagename'] = $this->uri->segment(2);
        $this->load->view(ADMIN.'template/dashbord_template', $data);
    }
    
    public function editpage($id = NULL){
        $data['pagedata'] = $this->pagecontent_model->getPageData($id);
        $data['content_for_layout'] = ADMIN.'postedit';
        $data['pagename'] = $this->uri->segment(2);
        $this->load->view(ADMIN.'template/dashbord_template', $data);
    }
    
    public function changeState($id = NULL, $stat = NULL){
        
    }
    
    public function editsave(){
        $update_page = $this->pagecontent_model->updatePageData();
        if($update_page == true){
          redirect(ADMIN.'pagecontent/', 'refresh')  ;
        }
    }
}

?>
