<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
        function __construct() {
            parent::__construct();
            $this->load->model(ADMIN.'Login_Model');
            
        }
	public function index()
	{
		$this->load->view(ADMIN.'login');
	}
	
	public function send(){
		
		//$this->load->view(ADMIN.'login');
                $query = $this->Login_Model->userLogin();
                if(isset($query) || $query != NULL){
                    foreach ($query as $row){
                        
                    }
                    
                    $newdata = array(
                        'username'=>$row->username,
                        'email'=>$row->email,
                        'last_login'=>date('Y-m-d H:i:s'),
                        'is_logged_in_admin'=>TRUE,
                    );
                    $this->session->set_userdata($newdata);
                    $data_arr = array(
                        'last_login'=>date('Y-m-d H:i:s')
                    );
                    $this->db->where('id', $row->id);
                    $this->db->update('users', $data_arr);
                    
                    redirect(ADMIN.'dashboard/', 'refresh');
                    
                }
               //redirect();
               $data['error_msg'] = 'Username or Password is Incorrect!!'; 
               $this->load->view(ADMIN.'login', $data);
	}
        
        public function loginRedirect(){
            $this->load->view(ADMIN.'template/dashbord_template');
        }
        
        public function logout(){
            $this->session->sess_destroy();
            redirect(ADMIN.'login/', 'refresh');
        }
       
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */