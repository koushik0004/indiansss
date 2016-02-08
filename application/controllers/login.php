<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller{
	
	function __construct(){
		parent :: __construct();
		$this->load->model('login_model');
	}
	
	public function index(){

		$data['content_for_layout'] = 'signin';
		if($this->uri->segment(3)=='loginfirst'){
			$data['loginfirest'] = 'Please Login first to see the issue page';
		}
		if($this->uri->segment(3)=='password-change-succesfull'){
			$data['loginfirest'] = 'User password has been changed. Login again!';
		}
		if($this->uri->segment(2)=='userlogin'){
			$data['loginfirest'] = 'login error';
		}
		$this->load->view('include/template', $data);
	}
	
	public function signup(){
		
		$data['content_for_layout'] = 'signup';
		if($this->uri->segment(3)=='success'){
			$data['success_message'] = 'User Successfully Signed Up..<br/>Please Login!';
		}
		$this->load->view('include/template', $data);
	}
	
	public function create_user(){
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('name', 'Name required', 'trim|required');
		$this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email|is_unique[users.email]');
		//$this->form_validation->set_rules('uname1', 'Username', 'trim|required|min_length[4]');
		$this->form_validation->set_rules('passwd', 'Password', 'trim|required|min_length[8]|max_length[32]');
		$this->form_validation->set_rules('repass', 'Password Confirmation', 'trim|required|matches[passwd]');
		
		if($this->form_validation->run() == FALSE)
		{
			$data['content_for_layout'] = 'signup';
			$this->load->view('include/template', $data);
		}
		
		
		
		
		else
		{			
			$existsEmail = $this->login_model->getEmailExists($this->input->post('email'));
			if($existsEmail === TRUE){
				$data['content_for_layout'] = 'signup';
				$data['emailexists'] = 'Email address already been registered!';
				$this->load->view('include/template', $data);
			}
			
			else if($query = $this->login_model->ceate_user())
			{
				$data['content_for_layout'] = 'signup';
				//$data['success_message'] = 'User Successfully Signed Up..<br/>Please Login!';
				//$this->load->view('include/template', $data);
				redirect('login/signup/success', 'refresh');
			}
			else
			{
				$data['content_for_layout'] = 'signup';
				$data['success_message'] = 'User Could Not Saved!';
				$this->load->view('include/template', $data);		
			}
		}
	}
	
	public function signin(){
		
		$data['content_for_layout'] = 'signin_form';
		$this->load->view('include/template', $data);	
	}
	
	public function userlogin(){
		
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');
		if($this->form_validation->run() == FALSE)
		{
			$data['content_for_layout'] = 'signin';
			$this->load->view('include/template', $data);
		}
		else{
			$query = $this->login_model->login_user();
			//echo sha1($this->input->post('passwd'));
			if(isset($query) && is_array($query)) // if the user's credentials validated...
			{
				//echo 'test';
				foreach($query as $row){
				}
				$data = array(
					'email' => $this->input->post('email'),
					'user_id'=>$row->id,
					'last_login'=>date('Y-m-d H:i:s'),
					'userfullname'=>$row->fullname,
					'is_logged_in' => true
				);
				$this->session->set_userdata($data);
				
				//$pagename = (isset($this->session->userdata('request_page')) && $this->session->userdata('request_page')!='')?''.$this->session->userdata('request_page').'':'';
				//exit();
				redirect(base_url().$this->session->userdata('request_page'), 'refresh');
				/*echo '<script>
					window.location.href='.base_url().$pagename.'
				</script>';*/
				
			}
			else // incorrect username or password
			{
				$this->index();
			}
		}
		
	}
	
	public function loginRedirect(){
		$data['sidebar_sponsers'] = $this->login_model->getUsers();
		$data['content_for_layout'] = 'signup_successful';
		$this->load->view('include/template', $data);
	}
	
	public function logout()
	{
		$this->session->sess_destroy();
		//$this->index();
		redirect('login/', 'refresh');
	}
	
	public function signin_again(){
		$data['sidebar_sponsers'] = $this->login_model->getUsers();
		$data['content_for_layout'] = 'signin_form';
		$data['login_msg'] = 'To access this page please login first!';
		$this->load->view('include/template', $data);
	}
	
	public function forgetpass(){
            $data['content_for_layout']='forgetpassword';
			if($this->uri->segment(3) == 'user-not-exixts'){
				$data['userexists'] = 'User of this email dose not exists, please sign up';
			}
			if($this->uri->segment(3) == 'mail-sent'){
				$data['userexists'] = 'Mail has been sent successfully!';
			}
            $this->load->view('include/template', $data);
        }
                
        public function emailsend(){
            $this->load->library('form_validation');
		
			$this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');
			if($this->form_validation->run() == FALSE)
			{
				$data['content_for_layout'] = 'forgetpassword';
				$this->load->view('include/template', $data);
			}
					else{
						
						$email_val = $this->input->post('email');
						$existsEmail = $this->login_model->getEmailExists($email_val);
						
						if($existsEmail === TRUE){
							$result = $this->login_model->getUserRow($email_val, 'email');
							foreach($result as $row){
							}
							
							$this->session->set_userdata('passwd_email', $email_val);
							$this->session->set_userdata('passwd_id', $row->id);
							//redirect('php_email/index/'.base64_encode($email_val),'refresh');
							redirect('php_email/', 'refresh');
						}
						
						else{
							redirect('login/forgetpass/user-not-exixts', 'refresh');
						}
					}
        }
		
		public function changepassword(){
			if($this->uri->segment(3)!=''){
				$encodedId = $this->uri->segment(3);
				
				$user_id = $this->customDecode($encodedId);
				
				$result = $this->login_model->getUserRow($user_id, 'id');
				
				foreach($result as $row){
				}
				/*echo $row->fullname;
				exit();*/
				$this->session->set_userdata('changepass_id', $user_id);
				$this->session->set_userdata('changepass_email', $row->email);
				$data['content_for_layout'] = 'changepss';
				$this->load->view('include/template', $data);
				
			}
		}
		
		public function updatepassword(){
			$this->load->library('form_validation');
		
			$this->form_validation->set_rules('passwd', 'Password', 'trim|required|min_length[8]|max_length[32]');
			$this->form_validation->set_rules('repass', 'Password Confirmation', 'trim|required|matches[passwd]');
			if($this->form_validation->run() == FALSE)
			{
				$data['content_for_layout'] = 'changepss';
				$this->load->view('include/template', $data);
			}
			else{
				if($this->input->post('user_id')!=''){
					
					$update_query = $this->login_model->updateUserPassword($this->input->post('user_id'));
					if($update_query === TRUE){
						//echo 'test';
						$this->session->sess_destroy();
						redirect('login/index/password-change-succesfull', 'refresh');
					}
					
				}
			}
			
		}
		
		public function customDecode($id = NULL){
			$getreplace = '-'.substr($id, 0, 2);
			
			$encodedId = str_replace($getreplace, '=', $id);
			return base64_decode($encodedId);
		}
		
		public function loggedIn(){
			$login = $this->session->userdata('is_logged_in');
			if(isset($login) && $login===TRUE){
				echo json_encode(array('responseText'=>'logged_in'));
			}
			else{
				echo json_encode(array('responseText'=>'not logged_in'));
			}
			return;
			
		}
}