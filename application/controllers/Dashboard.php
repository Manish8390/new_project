<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Dashboard');
		$this->load->library('session');

	}
	
	public function index()
	{
		// $data['transaction']=$this->trans->detail_note($id);
		// $this->load->view('print_note', $data, FALSE);
		$data['userdate'] = $this->session->userdata();
		$this->load->view('dashbord/dashbord',$data);
	}

}

/* End of file Kasir.php */
/* Location: ./application/controllers/Kasir.php */
?>