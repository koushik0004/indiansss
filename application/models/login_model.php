<?php 

class Login_Model extends CI_Model{
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
}
?>