<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of pdfcategory_model
 *
 * @author win
 */
class pdfcategory_model extends CI_Model{
    //put your code here
    
    var $folder_path;
    var $folder_path_url;
    function __construct() {
        parent::__construct();
        $this->folder_path = realpath(APPPATH.'../pdf'); /*I also can use BASEPATH rather than APPPATH*/
	$this->folder_path_url = 'pdf/';
    }
    
    public function getAllPdfCategory(){
        //$this->db->where('isblocked', '0');
        $this->db->select(array('c1.*', 'c2.category_name as parent_category_name'));
        $this->db->from('pdfcategories c1');
        $this->db->join('pdfcategories c2', 'c1.parent_id = c2.id', 'left');
        $this->db->where('c1.isdeleted', '0');
        $query = $this->db->get();
        return $query;
    }
    public function getPdfCategoryData($id=NULL){
        $this->db->where('id', $id);
        $query = $this->db->get('pdfcategories');
        return $query->result();
    }
    
    public function updatePdfCategoryData(){
        $data = array(
            'category_name'=>  $this->input->post('category_name'),
            'parent_id'=>  addslashes($this->input->post('parent_id')),
            'category_content'=>  addslashes($this->input->post('category_content')),
            'issueing_year'=>  addslashes($this->input->post('issueing_year')),
            'updated'=> date('Y-m-d H:i:s'),
        );
        $category_id = $this->input->post('category_id');
        if(!empty($category_id) && $category_id !== NULL){
            $this->db->where('id', $this->input->post('category_id'));
            $query = $this->db->update('pdfcategories', $data);
            $getId = $this->input->post('category_id');
        }
        else{
            $data['created'] = date('Y-m-d H:i:s');
            $query = $this->db->insert('pdfcategories', $data);
            $getId = $this->db->insert_id();
            
        }
        if($this->input->post('parent_id') > 0){
                //code here
                $this->db->where('id', $this->input->post('parent_id'));
                $cat_query = $this->db->get('pdfcategories');
                $cat_data = $cat_query->result();
                $cat_data = $cat_data[0];
                if(file_exists($this->folder_path.'/pdfset-'.$cat_data->id))
                    mkdir($this->folder_path.'/pdfset-'.$cat_data->id.'/issueset-'.$getId, 0777);
                else{
                    mkdir($this->folder_path.'/pdfset-'.$cat_data->id, 0777);
                    mkdir($this->folder_path.'/pdfset-'.$cat_data->id.'/issueset-'.$getId, 0777);
                }
                $data_path = array(
                   'directory_path'=>$this->folder_path_url.'pdfset-'.$cat_data->id.'/issueset-'.$getId,
               );
                $this->db->where('id', $getId);
                $dir_update = $this->db->update('pdfcategories', $data_path);
            }
            else{
                if(!file_exists($this->folder_path.'/pdfset-'.$getId))
                    mkdir($this->folder_path.'/pdfset-'.$getId, 0777);
               
               $data_path = array(
                   'directory_path'=>$this->folder_path_url.'pdfset-'.$getId,
               );
               $this->db->where('id', $getId);
               $dir_update = $this->db->update('pdfcategories', $data_path);
            }
        if($query === TRUE){
            return TRUE;
        }
        return FALSE;
    }
    
    public function getParentPdfCategory(){
        $arr = array(
                'isdeleted'=>'0',
                'parent_id'=>'0',
            );
        $query = $this->db->get_where('pdfcategories', $arr);
        $data[0]='Set as parent category';
        if($query->num_rows > 0){
            foreach ($query->result() as $row){
                $data[$row->id]=$row->category_name;
            }
        }
        return $data;
    }
}

?>
