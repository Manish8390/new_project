<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

	public function get_user()
	{
		$tm_user=$this->db->get('user')->result();
		return $tm_user;
	}
	public function sendForgotPassOTP()
	{
		$user_email = $this->input->post('email');
		$query = $this->db->where('user_email',$user_email)
						->get('user');
		if ( $query->num_rows()>0) {		
			$OTP=rand(1000,9999);
			$query = "UPDATE `user` SET user_OTP=".$OTP." WHERE user_email='".$user_email."'";
			$this->db->query($query);
			$config = Array(
				'protocol' => 'smtp',
				'smtp_host' => 'ssl://smtp.googlemail.com',
				'smtp_port' => 465,
				'smtp_user' => 'sumitmudaliar17@gmail.com', // change it to yours
				'smtp_pass' => 'ntirvtvsapyoeezv', // change it to yours
				'mailtype' => 'html',
				'charset' => 'iso-8859-1',
				'wordwrap' => TRUE
			);
			$message = 'Hellow User Your OTP is '.$OTP;
			$this->load->library('email', $config);
			$this->email->set_newline("\r\n");
			$this->email->from($config['smtp_user']); // change it to yours
			$this->email->to($user_email);// change it to yours
			$this->email->subject('Varify OTP BY CI-BSMS');
			$this->email->message($message);
			if($this->email->send()){
				echo 'Email sent.';
			}else{
				show_error($this->email->print_debugger());
			}
			$data=array(
				'temp_user_email'=>$user_email
			);
			$this->session->set_userdata( $data );
			return true;
		}else{
			return false;
		}
	}

	

}

/* End of file M_user.php */
/* Location: ./application/models/M_user.php */