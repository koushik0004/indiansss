<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Dashboard extends CI_Controller {



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

            $this->checkLoggedIn();

        }

        public function checkLoggedIn(){

            $isLogged = $this->session->userdata('is_logged_in_admin');

            if(!$isLogged || !isset($isLogged)){

                redirect(ADMIN.'login/', 'refresh');

            }

        }





        public function index()

		{
			//echo  $this->uri->segment(2);
			$data['pagename'] = $this->uri->segment(2);
			$data['content_for_layout'] = ADMIN.'template/dashbord_content';
			$this->load->view(ADMIN.'template/dashbord_template', $data);
	
		}

	

	public function send(){

		echo '<script>alert("logged in");</script>';

		$this->load->view(ADMIN.'login');

	}

}



/* End of file welcome.php */

/* Location: ./application/controllers/welcome.php */