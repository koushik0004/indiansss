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
		$user_id  = $this->session->userdata('passwd_id');
        //echo $email_val;
        //exit();
      /*$config = array(
                        'protocol'=>'sendmail',//'smtp',
                        'smtp_host'=>'ssl://smtp.googlemail.com',
                        'smtp_port'=> 465,
                        'smtp_user'=>'ronn.idia@gmail.com',
                        'smtp_pass'=>'koushikpass',
                        'mailpath'=>'/usr/sbin/sendmail',
                        'charset'=>'iso-8859-1',
                        'wordwrap'=>TRUE
                    );
         $this->load->library('email', $config);*/
		 
		 $config = array();
		$config['useragent'] = "CodeIgniter";
		$config['mailpath'] = "/usr/sbin/sendmail"; // or "/usr/sbin/sendmail"
		$config['protocol'] = "smtp";
		$config['smtp_host'] = "localhost";
		$config['smtp_port'] = "25";
		$config['mailtype'] = 'html';
		$config['charset'] = 'utf-8';
		$config['newline'] = "\r\n";
		$config['wordwrap'] = TRUE;
		
		$this->load->library('email');
		
		$this->email->initialize($config);

         $this->email->set_newline('\r\n');
         
		 //$formmalid = 'admin@indiansss.org';
		 if (empty($formmalid))
		{
			$formmalid = $this->config->item('CONF_EMAIL_ID');
			$formname = $this->config->item('MAIL_FROM_NAME');
		}
		
		 $id_data = $this->customEncode($user_id);
		 /*echo $id_data;
		 exit();*/
		 $msg_body = '';
					 $msg_body .= '<table width="100%" border="0">
			  <tr>
				<td colspan="2" align="center">You can change your password, please visite the link below</td>
			  </tr>
			  <tr>
				<td width="50%">&nbsp;</td>
				<td width="50%">&nbsp;</td>
			  </tr>
			  <tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			  </tr>
			  <tr>
				<td colspan="2" align="center"><a href="'.site_url('login/changepassword/'.$id_data.'').'" style="text-decoration:none; font-size:14px; font-weight:bold;">Click Here</a></td>
			  </tr>
			</table>
					';
         $this->email->from($formmalid, 'Administrator');
         $this->email->to($email_val);
         $this->email->subject('Email for change password request');
         $this->email->message($msg_body);
		
         
         if($this->email->send()){
             //echo 'email send successfyully';
			 $this->session->sess_destroy();
			 redirect('login/forgetpass/mail-sent', 'refresh');
			 
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
			
	public function customEncode($id = NULL){
		$basechng = base64_encode($id);
		$getfirsttwo = '-'.substr($basechng, 0, 2);
		$chng_agn = str_replace('=', $getfirsttwo, $basechng);
		return $chng_agn;
	}
}

?>
