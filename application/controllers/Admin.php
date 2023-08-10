<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('M_admin');
	}

	public function index()
	{
		if ($this->session->userdata('login') == FALSE) {
			$this->load->view('users/login');
		} else {
			redirect('Dashboard');
		}
		
	}
	public function proses_login()
	{
		if ($this->M_admin->LoginUser() == TRUE) {
			$this->session->set_flashdata('success', 'Login Successfully');
			redirect('Dashboard/index');
		} else {
			$this->session->set_flashdata('danger', 'Username and password is Wrong , Please try again');
			$this->load->view('users/login');
		}
	}

	public function register()
	{
		if ($this->session->userdata('login') == FALSE) {
			$this->load->view('users/register');
		} else {
			redirect('Dashboard');
		}
	}

	public function proses_register()
	{
		if ($this->M_admin->get_register() == TRUE) {
			$this->session->set_flashdata('success', 'OTP Send Successfully');
			redirect('admin/verify_otp_page');
		} else {
			$this->session->set_flashdata('danger', 'Email And username Allredy register !, Please Login');
			redirect('admin/register');
		}
	}
	public function verify_otp_page()
	{
		$this->load->view('users/verify_otp');
	}
	public function verify_otp()
	{
		if ($this->M_admin->verifyOTP() == TRUE) {
			$this->session->set_flashdata('success', 'Username and password send to register email id');
			redirect('admin/index');
		} else {
			$this->session->set_flashdata('danger', 'Enter OTP is Wrong !, Please Enter Currect OTP');
			redirect('admin/verify_otp_page');
		}
	}
	public function resend_OTP()
	{
		if ($this->M_admin->resendOTP() == TRUE) {
			$this->session->set_flashdata('success', 'OTP Resend Successfully');
			redirect('admin/verify_otp_page');
		} else {
			$this->session->set_flashdata('danger', 'Enter OTP is Wrong !, Please Enter Currect OTP');
			redirect('admin/verify_otp_page');
		}
	}
	public function forgotPassword()
	{
		$this->load->view('users/forgot_password');
	}
	public function logout()
	{
		// $this->session->sess_destroy();
		// redirect('admin/index','refresh');
		if ($this->M_admin->logOutUser() == TRUE) {
			$this->session->set_flashdata('success', 'Thanks You');
			$this->load->view('users/login');
		}
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */