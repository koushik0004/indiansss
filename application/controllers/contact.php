<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {

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
		$this->load->model('Contact_Model');
	} 
	public function index()
	{
        $data['url_path'] = $this->uri->segment(1);
		$this->load->view('include/contactus_template', $data);
	}

	public function pageDetails(){
		$pagename = $this->uri->segment(2);
		$all_content = $this->Contact_Model->getContentByPage($pagename);
		$data['pagecontent'] = $all_content[0];
		$data['content_for_layout'] = 'page_cms';
		$this->load->view('include/template', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */