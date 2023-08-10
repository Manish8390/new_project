<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class products_model extends CI_Model {


	public function Add_product(){
        $config['upload_path'] = './uploads/product_imgs';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		if ($_FILES['gambar']['name']!="") {
			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('gambar')){
				return false;
			}else{
				$user_id = $this->session->userdata('user_id');
				$fileName= $this->upload->data('file_name');
                $object=array(
                    "user_id"=>$user_id,
                    "product_name"=>$this->input->post('product_name'),
                    "description"=>$this->input->post('description'),
                    "category"=>$this->input->post('category'),
                    "type"=>"1",
                    "original_price"=>$this->input->post('original_price'),
                    "selling_price"=>$this->input->post('selling_price'),
                    "states"=>$this->input->post('states'),
                    "city"=>$this->input->post('city'),
                    "pincode"=>$this->input->post('pincode'),
                    "country"=>$this->input->post('country'),
                    "address_1"=>$this->input->post('address_1'),
                    "address_2"=>$this->input->post('address_2'),
                    "status"=>1,
                    "upload_Image"=>$fileName
                );
                $this->db->insert('products', $object);
                return true;
			}
		} 

    }
	public function getAllproduct(){
        $query = $this->db->where('status',1)
                        ->get('products');
        $array = $query->result();
        return $array;
    }

}

/* End of file M_user.php */
/* Location: ./application/models/M_user.php */