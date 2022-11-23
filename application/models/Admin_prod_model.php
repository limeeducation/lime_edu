<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_prod_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		//Codeigniter : Write Less Do More
	}
	public function run_query($query){
		return $this->db->query($query)->result();
	}

	public function selectProdList(){
		$q_get_simple_students = "SELECT stu_idx, stu_name, stu_nat, stu_field, start_dt, stu_mobile, cur_area, reg_date
								  FROM apply_students
								  WHERE contact_yn = 'N'
								  ORDER BY reg_date DESC limit 10";

		if($isCnt){
			$q_get_simple_students = "SELECT count(*) as cnt FROM apply_students";
		}
		$result =  $this->db->query($q_get_simple_students)->result();
		return $result;
	}

	public function addBanner($data){
		$tab = $data['banr_tab'];
		$type = $data['banr_type'];
		$seq_max_q = "SELECT MAX(banr_seq) AS seq FROM banner WHERE banr_tab='{$tab}' AND banr_type='{$type}'"
		$res =  $this->db->query($seq_max_q)->result();
		$seq_max = $res[0]->seq;
		$data['banr_seq'] = $seq_max+1;
		$this->db->insert('banner',$data);
        return $this->db->insert_id();
	}
}

?>
