<?php 
if(!defined('BASEPATH')){exit('No direct Script Access Allowed!');}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
 class Home_Model extends CI_Model{
    function __construct() {
        parent::__construct();
    }
	
	public function getLinks(){
		$query = $this->db->get_where('ref_links', array('status'=>'1'));
		
		if($query->num_rows()>0){
			return $query->result();
		}
	}
        
        public function getPageContent(){
            $query = $this->db->get('pagecontent', array('page_name'=>'home', 'isblocked'=>'0'));
            if($query->num_rows()>0){
                return $query->result();
            }
            return FALSE;
        }
        
        public function getCurrentIssue(){
            $query = $this->db->get_where('pagecontent', array('id'=>'2', 'isblocked'=>'0'));
            if($query->num_rows()>0){
                return $query->result();
            }
            return FALSE;
        }
        
        public function getAllPdfLinks(){
            $this->db->select(array('j.*', 'c.category_name as under_category', 'c.parent_id as parent_category', 'c.id as cat_id'));
            $this->db->from('journals j');
            $this->db->join('pdfcategories c', 'j.pdfcategory_id = c.id', 'left');
            //$this->db->where('j.isdeleted', '0');
			$this->db->where(array('j.isdeleted'=>'0', 'j.isblocked'=>'0'));
            $this->db->order_by('j.pdfcategory_id', 'j.id');
            $query = $this->db->get();
            return $query->result();
        }
        
        public function getParentCategroyJournals(){
            $conditions = array(
                'isblocked'=>'0',
                'isdeleted'=>'0',
                'parent_id'=>0,
            );
            $query = $this->db->get_where('pdfcategories', $conditions);
		
		if($query->num_rows()>0){
			return $query->result();
		}
        }
        
        public function getChildCategroyJournals(){
            $conditions = array(
                'isblocked'=>'0',
                'isdeleted'=>'0',
                'parent_id !='=>0,
            );
            $query = $this->db->get_where('pdfcategories', $conditions);
		
            if($query->num_rows()>0){
                return $query->result();
            }
        }
     
     
        /*updated by 2-05-2016*/
        public function searchJournal($search_str, $search_attr){
            $attrSpecification = array(
                'author_name'=>'written_by',
                'article_title'=>'title',
                'journal_name'=>'title'
            );
            $conditions = array(
                'isblocked'=>'0',
                'isdeleted'=>'0',
            );
            
            $this->db->select($attrSpecification[$search_attr]);
            $this->db->where($conditions);
            $this->db->like($attrSpecification[$search_attr], $search_str, 'both');
            $query = $this->db->get('journals');
            if($query->num_rows()>0){
                return $query->result_array();
            }
        }
        /*updated by 2-05-2016*/
        
        
 }