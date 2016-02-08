<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of gallery_model
 *
 * @author BAPI
 */
class gallery_model extends CI_Model{
    //put your code here
    var $gallery_path;
    var $gallery_path_url;
    
    function __construct() {
        parent::__construct();
        $this->gallery_path = realpath(APPPATH.'../images'); /*I also can use BASEPATH rather than APPPATH*/
        $this->gallery_path_url = base_url().'images/';
    }
    
    public function do_upload($id){
		$config = array(
			'allowed_types'=> 'jpg|jpeg|gif|png',
			'upload_path'=>$this->gallery_path.'/gallery_image_main',
			'file_name'=>$_FILES['img_upload']['name'],
			'max_size'=>3000
		);
		
		$this->load->library('upload', $config);
		$this->upload->do_upload('img_upload');			/*specify the form field name here, i.e. the upload file field name*/
		if($this->upload->display_errors()){
			echo $error = $this->upload->display_errors();
                        exit; 
			return $error;
		}
		$image_data = $this->upload->data();			/*data() is the method to upload the files, and returns all the info of the uploaded file*/
		//echo $image_data['full_path'];
		
		$config = array(
			'source_image'=>$image_data['full_path'],
			'new_image'=>$this->gallery_path.'/gallery_image_thumb',
			'maintain_ratio'=>true,
			'height'=>107,
			'width'=>150
		);
		
		$this->load->library('image_lib', $config);
		$this->image_lib->resize();
		//print_r ($img_resize);
		
		/*$img_val = array('img_name'=>$this->input->post('img_name'),
		'img_main'=>$image_data['file_name'],
		'img_thumb'=>$image_data['file_name'],
		'status'=>'1'
		);
		
		$insert_data = $this->db->insert('img_insert', $img_val);*/
		return $image_data['file_name']; 
	}
    
    public function getGalleryData($id=NULL){
        $this->db->where('id', $id);
        $query = $this->db->get('galleries');
        return $query->result();
    }
    
    public function updateGalleryData(){
        $data = array(
            'imagename'=>  $this->input->post('imagename'),
            'content'=>  addslashes($this->input->post('content')),
            'modified'=> date('Y-m-d H:i:s'),
        );
        
        
        if(!empty($journal_id) && $journal_id !== NULL){
            $this->db->where('id', $this->input->post('gallery_id'));
            $query = $this->db->update('galleries', $data);
            $get_last_id = $this->input->post('gallery_id');
        }
        else{
            $data['created'] = date('Y-m-d H:i:s');
            $query = $this->db->insert('galleries', $data);
            $get_last_id = $this->db->insert_id();
        }
        if(!empty($_FILES['img_upload']['name'])&& $_FILES['img_upload']['name'] != NULL){
            $imgname = $this->do_upload($get_last_id);
            $data_path = array(
                   'thumb_path'=>'images/gallery_image_thumb/'.$imgname,
                    'main_path'=>'images/gallery_image_main/'.$imgname,
               );
            $this->db->where('id', $get_last_id);
            $dir_update = $this->db->update('galleries', $data_path);
        }
        if($query === TRUE){
            return TRUE;
        }
        return FALSE;
    }
    
    public function getAllGalleries(){
        $this->db->where(array('isblocked'=>'0', 'isdeleted'=>'0'));
        $query = $this->db->get('galleries');
        return $query;
    }
    
}

?>
