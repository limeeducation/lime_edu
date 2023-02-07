<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_student_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		//Codeigniter : Write Less Do More
	}

	public function gatStudentList($isCnt = null){
		$q_get_simple_students = "SELECT con_idx, con_name, con_natio, con_study, con_start_dt, con_date, con_office, con_reg_dt
								  FROM apply_students
								  ORDER BY reg_date DESC";

		if($isCnt){
			$q_get_simple_students = "SELECT count(*) as cnt FROM apply_students";
		}
		$result =  $this->db->query($q_get_simple_students)->result();
		return $result;
	}


}

?>
