<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class products extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('products_model');
	}
	public function AddProductsView()
	{
		$this->load->view('products/Add_product');
	}
    public function AddProduct()
	{
		$this->products_model->Add_product();
        $this->session->set_flashdata('success', 'Products added sucessfully');
        // $this->load->view('users/users_table_view',$data);
        redirect('nev_bar/getAllProducts');
		
	}
}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */