<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of php_email
 *
 * @author BAPI
 */
class Php_Email extends CI_Controller{
    //put your code here
    function __construct() {
        parent::__construct();
    }
    public function index(){
        $email_val = $this->session->userdata('passwd_email');
        //echo $email_val;
        //exit();
      $config = array(
                        'protocol'=>'smtp',
                        'smtp_host'=>'ssl://smtp.googlemail.com',
                        'smtp_port'=> '465',
                        'smtp_user'=>'ronn.idia@gmail.com',
                        'smtp_pass'=>'koushikpass',
						'mailtype'  => 'html', 
                        //'mailpath'=>'/usr/sbin/sendmail',
                        'charset'=>'iso-8859-1',
                        'wordwrap'=>TRUE
                    );
         $this->load->library('email', $config);
		 
	/*	 $config = array();
		$config['useragent'] = "CodeIgniter";
		$config['mailpath'] = "/usr/sbin/sendmail"; // or "/usr/sbin/sendmail"
		$config['protocol'] = "smtp";
		$config['smtp_host'] = "localhost";
		$config['smtp_port'] = "25";
		$config['mailtype'] = 'html';
		$config['charset'] = 'utf-8';
		$config['newline'] = "\r\n";
		$config['wordwrap'] = TRUE;*/
		
		//$this->load->library('email');
		
		//$this->email->initialize($config);

         $this->email->set_newline('\r\n');
         
		 //$formmalid = 'admin@indiansss.org';
		 if (empty($formmalid))
		{
			$formmalid = $this->config->item('CONF_EMAIL_ID');
			$formname = $this->config->item('MAIL_FROM_NAME');
		}
		 
         $this->email->from('ronn.idia@gmail.com', 'Koushik');
         $this->email->to($email_val);
         $this->email->subject('Test email for password change');
         $this->email->message('working great!');
		
         
         if($this->email->send()){
             echo 'email send successfyully';
         }
         else{
             show_error($this->email->print_debugger()) ;
         }
		 
		/* $ret_val = $this->sendMail($email_val, 'test mail', 'working great!', 'admin@indiansss.org', 'Admin');
		 if($ret_val === TRUE){
			  echo 'email send successfyully';
		 }
		 else{
			  show_error($ret_val);
		 }*/

    }
	function sendMail($to, $subject, $message , $formmalid = 'info@whs.com', $formname = 'Whs-Advanced', $cc='', $bcc='')
			{
				global $CI;
				if (empty($formmalid))
				{
				$formmalid = $CI->config->item('CONF_EMAIL_ID');
				$formname = $CI->config->item('MAIL_FROM_NAME');
				}
				
				$CI->load->library('email');
				
				$config['mailtype'] = 'html';
				$config['charset'] = 'utf-8';
				//$config['protocol'] = 'sendmail';
				$CI->email->initialize($config);
				$CI->email->from($formmalid, $formname);
				$CI->email->to($to);
				$CI->email->cc($cc);
				$CI->email->bcc($bcc);
				$CI->email->subject($subject);
				$CI->email->message($message);
				
				
				
				if ($CI->email->send())
				{
					return true;
				}
				else
				{
					return $this->email->print_debugger();
				}
			}
}

?>
