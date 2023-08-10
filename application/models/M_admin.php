<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {

	// public function get_login()
	// {
	// 	$query = $this->db->where('username', $this->input->post('username'))
	// 					->where('password', md5($this->input->post('password')))
	// 					->get('user');

	// 	if ( $query->num_rows()>0) {
	// 			$array = $query->row();
	// 			$data=array(
	// 				'logged_in'=> TRUE,
	// 				'username'=> $array->username,
	// 				'password' => md5($array->password),
	// 				'fullname' => $array->fullname,
	// 				'level'=>$array->level
	// 				);
				
	// 			$this->session->set_userdata( $data );

	// 		if ($this->db->affected_rows() > 0) {
	// 			return TRUE;
	// 		}else{
	// 			return FALSE;
	// 		}

	// 	}	
	// }

	public function get_register()
	{
		$email_id = $this->input->post('email');
		$username = $this->input->post('username');
		$query = $this->db->where('username', $username)
						->where('user_email',$email_id)
							->get('user');
		if ( $query->num_rows()>0) {		
			return false;
		}else{
			$user_Token	=rand(10000000000,99999999999);
			$OTP=rand(1000,9999);
			$object=array(
				'fullname'=>$this->input->post('fullname'),
				'user_email'=>$this->input->post('email'),
				'user_OTP'=>$OTP,
				'verify_otp_status'=>0,
				'status'=>1,
				'username'=>$this->input->post('username'),
				'password'=>$this->input->post('password'),
				'md5password'=>md5($this->input->post('password')),
				'level'=>2,
				'user_Token	'=>$user_Token
			);
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
			$this->email->to($email_id);// change it to yours
			$this->email->subject('Varify OTP BY CI-BSMS');
			$this->email->message($message);
			if($this->email->send()){
				echo 'Email sent.';
			}else{
				show_error($this->email->print_debugger());
			}
			$data=array(
				'temp_user_email'=>$email_id
			);
			$this->session->set_userdata( $data );
			return $this->db->insert('user', $object);
		}
	}
	public function LoginUser()
	{
		try{
			$this->load->library('session');
			$passwordMD=md5($this->input->post('password'));
			$query = $this->db->where('username', $this->input->post('username'))
							->where('md5password',$passwordMD)
							->get('user');
			if ( $query->num_rows()>0) {				
				$array = $query->row();
				$data=array(
					'logged_in'=> TRUE,
					'username'=> $array->username,
					'fullname' => $array->fullname,
					'level'=>$array->level,
					'user_Token'=>$array->user_Token,
					'user_id'=>$array->user_id,
					'upload_Image'=>$array->upload_Image
					);
				$this->session->set_userdata( $data );
				return TRUE;
			}else{
				return FALSE;
			}
		}catch(\Exception $e) {
			exit($e->getMessage());
		}
		
	}
	public function verifyOTP()
	{
		$temp_user_email = $this->session->userdata('temp_user_email');
		$query = $this->db->where('user_OTP', $this->input->post('otp'))
						->where('user_email',$temp_user_email)
							->get('user');
		if ( $query->num_rows()>0) {
			$tm_user=$this->db->where('user_email',$temp_user_email)
							->get('user')->result();
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
			$message= '<!DOCTYPE html>
			<html lang="en">
			<head>
				<style>
					@media (max-width: 768px){
						.main_div{
							width: 70% !important;
						}
						.logo_emil{
							width: 30% !important;
						}
			
					}
				</style>
			</head>
			<body>
				<div class="main_div" style="width: 40%; border: 4px solid #0f75bc; border-radius: 10px; margin: 0 auto; padding: 20px;">
					<div class="">
					</div>
					<div class="margin_top">
						<h4>Dear  '.$tm_user[0]->fullname.',</h4>
						<p> Your Username is :<strong> '.$tm_user[0]->username.'</strong></p>
						<p> Your password is :<strong> '.$tm_user[0]->password.'</strong></p>
						<p style="margin-bottom: 2px; margin-top: 3px;  margin-top: 15px; ">Thank You!,
						<p class="margin_zero">Team Developer</p>
						<p><span  style=" font-weight: bold;">Note:</span> Please do not reply to this mail as this is an automated mail service.</p>
						</p>
					</div>
				</div>
			</body>
			</html>';
			$this->load->library('email', $config);
			$this->email->set_newline("\r\n");
			$this->email->from($config['smtp_user']); // change it to yours
			$this->email->to($temp_user_email);// change it to yours
			$this->email->subject('Varify OTP BY CI-BSMS');
			$this->email->message($message);
			if($this->email->send()){
				echo 'Email sent.';
			}else{
				show_error($this->email->print_debugger());
			}
			$this->session->unset_userdata('temp_user_email');
			$query = "UPDATE `user` SET verify_otp_status=1 WHERE user_email='".$temp_user_email."'";
			$this->db->query($query);
			return TRUE;
		}else{
			return FALSE;
		}
	}
	public function resendOTP()
	{
		$temp_user_email = $this->session->userdata('temp_user_email');
		$OTP=rand(1000,9999);
		$query = "UPDATE `user` SET user_OTP=".$OTP." WHERE user_email='".$temp_user_email."'";
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
		$this->email->to($temp_user_email);// change it to yours
		$this->email->subject('Varify OTP BY CI-BSMS');
		$this->email->message($message);
        if($this->email->send()){
        	echo 'Email sent.';
        }else{
        	show_error($this->email->print_debugger());
        }
		
		return true;
	}
	public function logOutUser()
	{
		// $this->session->unset_userdata(); 
		$this->session->sess_destroy();
		return TRUE;
	}
}

/* End of file M_admin.php */
/* Location: ./application/models/M_admin.php */