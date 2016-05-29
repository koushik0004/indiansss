<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

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
         * @property home_model $home_model
	 */
	function __construct(){
		parent::__construct();
		$this->load->model('home_model');
	}
	public function index()
	{
        echo $data['url_path'] = $this->uri->segment(1);
		$data['sidebar_links'] = $this->home_model->getLinks();
        $data['tot_content'] = $this->home_model->getPageContent();
        $data['current_issue'] = $this->home_model->getCurrentIssue();
        $getcatecory = $this->home_model->getParentCategroyJournals();
        $cat_array = array();
        foreach($getcatecory as $cat){
            $cat_array[$cat->id] = $cat->category_name;
        }
        $data['pdf_parent_cat'] = $cat_array;//$this->home_model->getParentCategroyJournals();

        $get_child_arr = $this->home_model->getChildCategroyJournals();
        $child_arr = array();
        foreach($get_child_arr as $cat){
            $child_arr[$cat->id] = $cat->category_name;
        }
        $data['pdf_child_cat'] = $child_arr;
        $data['current_year_past_issue'] = '2016';
        $data['only_current_journal'] = $this->home_model->onluHomePageCurrentIssues();

        $data['all_journals'] = $this->home_model->getAllPdfLinks();
		$this->load->view('include/home_template', $data);
	}
    
    public function search(){       
        $search_str = $_REQUEST['q'];
        $search_attr = $_REQUEST['attrb'];
        $arr[] = "No record found";
        /*$arr = [
          "ActionScript",
          "AppleScript",
          "Asp",
          "BASIC",
          "C",
          "C++",
          "Clojure",
          "COBOL",
          "ColdFusion",
          "Erlang",
          "Fortran",
          "Groovy",
          "Haskell",
          "Java",
          "JavaScript",
          "Lisp",
          "Perl",
          "PHP",
          "Python",
          "Ruby",
          "Scala",
          "Scheme",
          $search_str,
          $search_attr
        ];*/
        $generated_rslt = $this->home_model->searchJournal($search_str, $search_attr);
        ///echo $str = $this->db->last_query();
        $attrSpecification = array(
            'author_name'=>'written_by',
            'article_title'=>'title',
            'journal_name'=>'title'
        );
        //print_r($generated_rslt);
        for($i=0; $i < count($generated_rslt); $i++){
            $arr[$i] = $generated_rslt[$i][$attrSpecification[$search_attr]];
        }
        echo json_encode($arr);
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */