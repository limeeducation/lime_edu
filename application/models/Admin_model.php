<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		//Codeigniter : Write Less Do More
	}
	public function run_query($query){
		return $this->db->query($query)->result();
	}

	//로그인
	public function do_login($id, $pass){
		$passwd = md5($pass);
		$q_get_account = "SELECT idx, pw, auth, mobile, email, adn_name, fail_count
						  FROM lime_adn_user
						  WHERE id = '{$id}' AND use_yn = 'Y'";
		$account = $this->db->query($q_get_account)->row();

		//검색되는 계정이 없는 경우
		if(empty($account->idx)) {
			$res = array(
				'msg' => '아이디 혹은 비밀번호를 확인하세요',
				'result'=>'fail'
			);
			return $res;
		}

		//ID 있는 경우
		//비밀번호 관계없이 잠겨있는 계정이면 관리자 요청 문구 노출
		if($account->fail_count >= 5){
			$res = array(
				'msg' => '로그인 5회 실패로 인해 로그인이 불가능합니다. 관리자에게 문의해 주세요.',
				'result'=>'fail'
			);
			return $res;
		}

		//비밀번호 확인 진행
		if($account->pw != $passwd){
			$sql = 'UPDATE lime_adn_user SET fail_count = fail_count + 1 WHERE idx = '.$account->idx;
			$this->db->query($sql);
			if($account->fail_count == 4){
				$res = array(
					'msg' => '로그인 5회 실패로 인해 로그인이 불가능합니다. 관리자에게 문의해 주세요.',
					'result'=>'fail'
				);
				return $res;
			}
			$fail_cnt = 5-($account->fail_count+1);
			$res = array(
				'msg' => '아이디 또는 비밀번호가 잘못되었습니다. 5회(잔여횟수: '.$fail_cnt.'회) 로그인 실패 시 계정 로그인이 차단됩니다.',
				'result'=>'fail'
			);
			return $res;
		}

		$res = array(
			'id'=>$id,
			'name'=>$account->adn_name,
			'user_idx'=>$account->idx,
			'position'=>$account->auth,
			'mobile'=>$account->mobile,
			'msg' => '로그인 성공',
			'result'=>'success'
		);

		return $res;
	}

	public function resetFailCount($user_idx){
		$this->db->set('fail_count', '0');
		$this->db->where('idx',$user_idx);
		return $this->db->update('lime_adn_user');
	}

	public function getSimpleStudents($isCnt=false){
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
}

?>
