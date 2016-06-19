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
    
    public function listAllSubmittedManuscript(){
        
        $this->load->library('pagination');
        $config['base_url'] = base_url().ADMIN.'submitted-manuscripts';
        /*most important for the castom 1st url*/
        $config['first_url'] = base_url().ADMIN.'submitted-manuscripts/1.html';//'http://localhost/CodeIgniterApps/site/index/1.html';
        $config['total_rows'] = $this->db->get('submitted_manuscripts')->num_rows();
        $config['per_page'] = 20;
        $config['num_links'] = (int)$config['total_rows']/$config['per_page'];
        $config['suffix'] = '.html';
        $config['uri_segment'] = 3;
        $config['first_link'] = 'First';
        $config['last_link'] = 'Last';
        $config['full_tag_open'] = '<div id="pagination">';
        $config['full_tag_close'] = '</div>';
        $this->pagination->initialize($config);
        $offset = ($this->uri->segment(3)!='')? $this->uri->segment(3) : '1' ;
        //echo $this->uri->segment(2);
        if($this->uri->segment(4)=='updated'){
            //exit();
            $offset = $this->uri->segment(5);
        }
        $data['pagename'] = $this->uri->segment(2);
        //$data['alluserdata'] = $this->Allusers_Model->getUserListCount($config['per_page'], $offset);
        $data['pagenumber'] = $offset;
        $data['all_manuscript'] = $this->journals_model->getAllSubmittedManuscriptCount($config['per_page'], $offset);
        //echo $this->db->last_query();
        $data['content_for_layout'] = ADMIN.'submitted_manuscripts';
        $this->load->view(ADMIN.'template/dashbord_template', $data);
    }
    
    public function manuscript_approval(){
		$manuscriptid = $this->uri->segment(4);
        $approval_status = $this->uri->segment(5);
		$landing_page = $this->uri->segment(6);
		$update_arr = array(
						'isapproved'=>$approval_status
					);

		$this->db->where('id', $manuscriptid);
		$query = $this->db->update('submitted_manuscripts', $update_arr);
        //echo $this->db->last_query(); exit();
		if($query==TRUE){
            $this->session->set_flashdata('item.status', 'Manuscript updated successfully');
			redirect(ADMIN.'submitted-manuscripts/'.$landing_page, 'refresh');
		}
	}
    public function delete_manuscript(){
		$manuscriptid = $this->uri->segment(4);
		$landing_page = $this->uri->segment(5);
		$update_arr = array(
						'isdeleted'=>'1'
					);

		$this->db->where('id', $manuscriptid);
		$query = $this->db->update('submitted_manuscripts', $update_arr);
        //echo $this->db->last_query(); exit();
		if($query==TRUE){
            $this->session->set_flashdata('item.status', 'Manuscript deleted successfully');
			redirect(ADMIN.'submitted-manuscripts/1', 'refresh');
		}
	}
}

?>
