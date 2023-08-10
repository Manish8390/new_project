<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class nev_bar_models extends CI_Model {

    
	public function getAllUsers(){
        $query = $this->db->where('status',1)
                        ->get('user');
        $array = $query->result();
        return $array;
    }
	

}

/* End of file M_user.php */
/* Location: ./application/models/M_user.php */