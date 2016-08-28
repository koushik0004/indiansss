<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Issues extends CI_Controller {

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
	function __construct(){
		parent::__construct();
		
		$isLoggedIn = $this->checkLoggedIn();
		
		if($isLoggedIn === FALSE){
			//$array_page = array('request_page'=>'issues/');
			$this->session->set_userdata('request_page', 'issues/');
			redirect('login/index/loginfirst', 'refresh');
		}
		
		//updated by 6-9-2015
		$this->load->model('Issues_Model');
	}
	 
	
	public function index()
	{
        echo $data['url_path'] = $this->uri->segment(1);
		$data['issues_after_75'] = array();
		$data['issues_after_75'] = $this->Issues_Model->getAllIssues();
		$data['issues_after_75_Volume_label'] = $this->Issues_Model->getCategoryAsVolume();
		$this->load->view('include/template_issue', $data);
	}
	
	public function checkLoggedIn(){
		if($this->session->userdata('is_logged_in') === TRUE){
			return TRUE;
		}
		
		return FALSE;
	}

	public function rewrite(){
		$pdfId = $this->uri->segment(4);
		$pdfDetails = $this->Issues_Model->getPdfById($pdfId);
		//print_r($pdfDetails);
		

		$file = base_url().$pdfDetails[0]['upload_path'];
		$file_name = explode('/', $pdfDetails[0]['upload_path']);

		echo $file_name[count($file_name)-1];
		header("Content-type:application/pdf");
		header("Content-Type: application/octet-stream");
		header("Content-Type: application/download");
		header("Content-Description: File Transfer");  

		// It will be called downloaded.pdf
		header("Content-Disposition:attachment;filename=".$file_name[count($file_name)-1]);
		// The PDF source is in original.pdf
		readfile($file);

		header("Content-Disposition: attachment; filename=" . $file_name[count($file_name)-1]);
		header("Content-Length: " . filesize($file));
		flush(); // this doesn't really matter.
		//exit();
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */