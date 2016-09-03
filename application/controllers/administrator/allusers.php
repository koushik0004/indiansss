<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Allusers extends CI_Controller {



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

            //$this->load->model('Dashboard_Model');
            $this->load->model(ADMIN.'Allusers_Model');
            $this->checkLoggedIn();

        }
		
		public function index(){
			
			$this->load->library('pagination');
			$config['base_url'] = base_url().ADMIN.'allusers/index';
			/*most important for the castom 1st url*/
			$config['first_url'] = base_url().ADMIN.'allusers/index/1.html';//'http://localhost/CodeIgniterApps/site/index/1.html';
			$config['total_rows'] = $this->db->get('users')->num_rows();
			$config['per_page'] = 20;
			$config['num_links'] = (int)$config['total_rows']/$config['per_page'];
			$config['suffix'] = '.html';
			$config['uri_segment'] = 4;
			$config['first_link'] = 'First';
			$config['last_link'] = 'Last';
			$config['full_tag_open'] = '<div id="pagination">';
			$config['full_tag_close'] = '</div>';
			$this->pagination->initialize($config);
			$offset = ($this->uri->segment(4)!='')? $this->uri->segment(4) : '1' ;
			//echo $this->uri->segment(3);
			if($this->uri->segment(4)=='updated'){
				//exit();
				$offset = $this->uri->segment(5);
			}
			$data['pagename'] = $this->uri->segment(2);
			$data['content_for_layout'] = ADMIN.'userdata';
			$data['alluserdata'] = $this->Allusers_Model->getUserListCount($config['per_page'], $offset);
			$data['pagenumber'] = $offset;
			$this->load->view(ADMIN.'template/dashbord_template', $data);
		}

        public function checkLoggedIn(){

            $isLogged = $this->session->userdata('is_logged_in_admin');

            if(!$isLogged || !isset($isLogged)){

                redirect(ADMIN.'login/', 'refresh');

            }

        }

	public function send(){

		echo '<script>alert("logged in");</script>';

		$this->load->view(ADMIN.'login');

	}
	
	public function changeState(){
		$userid = $this->uri->segment(4);
		$stat = $this->uri->segment(5);
		$landing_page = $this->uri->segment(6);
		$update_arr = array(
						'status'=>$stat
					);

		$this->db->where('id', $userid);
		$query = $this->db->update('users', $update_arr);
		if($query==TRUE){
			redirect(ADMIN.'allusers/index/updated/'.$landing_page, 'refresh');
		}
	}
	public function deleteuser(){
		$userid = $this->uri->segment(4);
		$landing_page = $this->uri->segment(5);
		$update_arr = array(
						'is_deleted'=>'1'
					);

		$this->db->where('id', $userid);
		$query = $this->db->update('users', $update_arr);
		if($query==TRUE){
			redirect(ADMIN.'allusers/index/updated/'.$landing_page, 'refresh');
		}
	}

	public function changePaidMode(){
		$userid = $this->uri->segment(4);
		$stat = $this->uri->segment(5);
		$landing_page = $this->uri->segment(6);
		$update_arr = array(
						'paid'=>$stat
					);

		$this->db->where('id', $userid);
		$query = $this->db->update('users', $update_arr);
		if($query==TRUE){
			redirect(ADMIN.'allusers/index/updated/'.$landing_page, 'refresh');
		}
	}

}



/* End of file welcome.php */

/* Location: ./application/controllers/welcome.php */