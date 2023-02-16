<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Banner_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		//Codeigniter : Write Less Do More
	}
	public function getProduct($prod_idx){

		$this->db->select('prod_name');
		$this->db->select('prod_img_url');
		$this->db->from('products');
		$this->db->where('prod_idx', $prod_idx);
		return $this->db->get()->result();
	}

}

?>
