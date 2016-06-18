<?php 

class Login_Model extends CI_Model{
    
    var $manuscript_path;
    var $manuscript_path_url;
    
    function __construct() {
        parent::__construct();
        $this->manuscript_path = realpath(APPPATH.'../'); /*I also can use BASEPATH rather than APPPATH*/
	    $this->manuscript_path_url = '/';
    } 
    
	public function getUsers(){
		$query = $this->db->order_by('last_login', 'desc')->get('users');
		return $query->result();
	}
	
	public function getUserRow($email, $dbField){
		$this->db->where($dbField, $email);
		$query = $this->db->get('users');
		return $query->result();
	}
	
	public function ceate_user(){
		$data = array(
			'email'=>$this->input->post('email'),
			'fullname'=>mysql_real_escape_string($this->input->post('name')),
			'aboutown'=>addslashes(mysql_real_escape_string($this->input->post('comments'))),
			'password'=> sha1($this->input->post('passwd')),
			'usergroup'=> 'endusers',
			'created'=>date('Y-m-d H:i:s'),
			//'last_login'=>date('Y-m-d H:i:s'),
			'status'=>'1'
		);
		
		$insert = $this->db->insert('users', $data);
		return $insert;
	}
	
	public function login_user(){
		$this->db->where('email', $this->input->post('email'));
		$this->db->where('password', sha1($this->input->post('passwd')));
		$query = $this->db->get('users');
		
		if($query->num_rows == 1){
			return $query->result();
		}
	}
	
	public function getEmailExists($email){
		$this->db->where('email', $email);
		$query = $this->db->get('users');
		
		if($query->num_rows > 0){
			return TRUE;
		}
		
		return FALSE;
	}
	
	public function updateUserPassword($id = NULL){
		$update_arr = array(
						'password'=>sha1($this->input->post('passwd'))
					);
		//$where_str = "id = '".$id."'";
		$this->db->where('id', $id);
		$query = $this->db->update('users', $update_arr); 
		if($query === TRUE){
			return TRUE;
		}
		return FALSE;
		//return TRUE;
	}
    
    /*updatde by 18-6-2016*/
    public function uploadManuscriptData(){
        $data = array(
            'title'=>  $this->input->post('title'),
            'content'=>  addslashes($this->input->post('content')),
            'written_by'=>  addslashes($this->input->post('written_by')),
            'tags'=>$this->input->post('title').', '.$this->input->post('written_by'),
            'updated'=> date('Y-m-d H:i:s'),
        );
        $filename = $this->input->post('upload_path');
        if(!empty($_FILES['upload_path']['name'])&& $_FILES['upload_path']['name'] != NULL){
            
            $upload_path = 'manuscript';

            //echo $upload_path->directory_path;
            //exit;
            $config = array(
                        'allowed_types'=> 'pdf|doc|docx',
                        'upload_path'=>$this->manuscript_path.'/'.$upload_path.'/',
                        'file_name'=>date('dHis').'-'.$_FILES['upload_path']['name'],
                        'max_size'=>10000
                );

            $this->load->library('upload', $config);
            $this->upload->do_upload('upload_path');
            if($this->upload->display_errors()){
                //echo $this->upload->display_errors();
                //exit;
                $error = $this->upload->display_errors(); //"This format not a suporting format!!";
                return $error;
            }
            $data['upload_path'] = $upload_path.'/'.date('dHis').'-'.$_FILES['upload_path']['name'];
        }
        
        
        $data['created'] = date('Y-m-d H:i:s');
        $query = $this->db->insert('submitted_manuscripts', $data);
        
        if($query === TRUE){
            return TRUE;
        }
        return FALSE;
    }
    /*updatde by 18-6-2016*/
    
}
?>