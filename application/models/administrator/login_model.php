<?php
if(!defined('BASEPATH')){exit('No direct Script Access Allowed!');}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Login_Model extends CI_Model{
    function __construct() {
        parent::__construct();
    }
    
    public function userLogin(){
        $data = array('username'=> $this->input->post('user_login'),
                    'password'=> sha1($this->input->post('user_pass')),
                );
        $query = $this->db->get_where('users', $data);
        //echo $query->num_rows;
        //exit();
        if($query->num_rows == 1){
            return $query->result();
        }

    }
}
?>
