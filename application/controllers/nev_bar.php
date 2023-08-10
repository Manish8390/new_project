<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class nev_bar extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('nev_bar_models');
		$this->load->model('products_model');
	}

	public function Dashboard()
	{
		$data['userdate'] = $this->session->userdata();
		$this->load->view('dashbord/dashbord',$data);
	}
	public function getAllusers()
	{
		if ($this->nev_bar_models->getAllUsers() == TRUE) {
            $data['users'] = $this->nev_bar_models->getAllUsers();
			$this->session->set_flashdata('success', 'Login Successfully');
			$this->load->view('users/users_table_view',$data);
		} else {
			$this->session->set_flashdata('danger', 'Username and password is Wrong , Please try again');
			$this->load->view('users/users_table_view');
		}
	}
	public function getAllProducts()
	{
		$data['products'] = $this->products_model->getAllproduct();
		$this->load->view('products/products_view',$data);
	}
}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */