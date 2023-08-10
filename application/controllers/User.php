<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_user','user');
	}
	public function index()
	{
		$data['get_user']=$this->user->get_user();
		$data['content']="v_user";
		$this->load->view('template', $data);
		
	}
	public function profileView()
	{
		$user_id = $this->session->userdata('user_id');
		$query = "SELECT * FROM `user` WHERE user_id=".$user_id;
		$data['profile'] = $this->db->query($query)->row();
		$data['userdate'] = $this->session->userdata();
		// print_r($data['profile']->upload_Image);
		// die();
		// $this->load->view('dashbord/header',$data);
		$this->load->view('users/profile_view',$data);
		
	}
	public function UploadProfileImg()
	{
		$config['upload_path'] = './uploads/profile_img';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		if ($_FILES['gambar']['name']!="") {
			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('gambar')){
				$this->session->set_flashdata('danger', 'Something id Wrong , Please try again');
				redirect('User/profileView');
			}
			else{
				$user_id = $this->session->userdata('user_id');
				$fileName= $this->upload->data('file_name');
				$query = "UPDATE user SET upload_Image='".$fileName."' WHERE user_id =".$user_id;
				$this->db->query($query);
				$this->session->set_flashdata('success', 'Image upload Successfully');
				redirect('User/profileView');
			}
		} 
	}
	public function sendForgotPassOTP()
	{
		if ($this->user->sendForgotPassOTP() == TRUE) {
			$this->session->set_flashdata('success', 'OTP Send Successfully');
			$this->load->view('users/verify_otp');
		} else {
			$this->session->set_flashdata('danger', 'Sorry You Are Not a Member !, Please Register First');
			$this->load->view('users/login');
		}
	}
}

/* End of file User.php */
/* Location: ./application/controllers/User.php */