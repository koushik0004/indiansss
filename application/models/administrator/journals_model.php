<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of journals_model
 *
 * @author win
 */
class journals_model extends CI_Model{
    //put your code here
    
    var $journal_path;
    var $journal_path_url;
    
    function __construct() {
        parent::__construct();
        $this->journal_path = realpath(APPPATH.'../'); /*I also can use BASEPATH rather than APPPATH*/
	$this->journal_path_url = '/';
    }
    
    public function getAllJournals(){
        //$this->db->where('isblocked', '0');
        $this->db->select(array('j.*', 'c.category_name as under_category'));
        $this->db->from('journals j');
        $this->db->join('pdfcategories c', 'j.pdfcategory_id = c.id', 'left');
        $this->db->where('j.isdeleted', '0');
        $query = $this->db->get();
        return $query;
    }
    public function getJournalsData($id=NULL){
        $this->db->where('id', $id);
        $query = $this->db->get('journals');
        return $query->result();
    }
    
    public function updateJournalData(){
        $data = array(
            'title'=>  $this->input->post('title'),
            'pdfcategory_id'=>  $this->input->post('pdfcategory_id'),
            'content'=>  addslashes($this->input->post('content')),
            'written_by'=>  addslashes($this->input->post('written_by')),
            'updated'=> date('Y-m-d H:i:s'),
        );
        $pdfcategory_id = $this->input->post('pdfcategory_id');
        $journal_id = $this->input->post('journal_id');
        $filename = $this->input->post('upload_path');
        if(!empty($_FILES['upload_path']['name'])&& $_FILES['upload_path']['name'] != NULL){
            $this->db->where('id', $pdfcategory_id);
            $query_cat = $this->db->get('pdfcategories');
            $mycat = $query_cat->result();
//            print_r($mycat);
//            exit;
            $upload_path = $mycat[0];
            
            //echo $upload_path->directory_path;
            //exit;
            $config = array(
                        'allowed_types'=> 'pdf|doc|docx',
                        'upload_path'=>$this->journal_path.'/'.$upload_path->directory_path.'/',
                        'file_name'=>$_FILES['upload_path']['name'],
                        'max_size'=>6000
                );

            $this->load->library('upload', $config);
            $this->upload->do_upload('upload_path');
            if($this->upload->display_errors()){
                        echo $this->upload->display_errors();
                        exit;
			$error = "This format not a suporting format!!";
			return $error;
		}
            $data['upload_path'] = $upload_path->directory_path.'/'.$_FILES['upload_path']['name'];
        }
        
        if(!empty($journal_id) && $journal_id !== NULL){
            
            
            $this->db->where('id', $this->input->post('journal_id'));
            $query = $this->db->update('journals', $data);
        }
        else{
            $data['created'] = date('Y-m-d H:i:s');
            $query = $this->db->insert('journals', $data);
        }
        
        if($query === TRUE){
            return TRUE;
        }
        return FALSE;
    }
    
    public function getPdfCategory(){
        $arr = array(
                'isdeleted'=>'0',
                'parent_id !='=>'0',
            );
        $query = $this->db->get_where('pdfcategories', $arr);
        $data[0]='Select category';
        if($query->num_rows > 0){
            foreach ($query->result() as $row){
                $data[$row->id]=$row->category_name;
            }
        }
        return $data;
    }
}

?>
