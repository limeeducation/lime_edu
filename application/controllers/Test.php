<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('test/test');
	}
	public function check_mobile(){
		$sSiteCode		= "BZ073";			// 사이트 코드 (NICE평가정보에서 발급한 사이트코드)
		$sSitePw		= "gZ1gsPiXjZLZ";			// 사이트 패스워드 (NICE평가정보에서 발급한 사이트패스워드)

		$sJumin 		= "0000000000000";						// 주민번호 체크 안함
		$sHP 			= $this->input->post('hp_num1').$this->input->post('hp_num2').$this->input->post('hp_num3'); // 휴대폰번호
		$sRequestSeq 	= "SEQ00001";								// 요청SEQ_식별값
		$sHPComp  		= "1";										// 이통사 구분안함

		echo "핸드폰번호 : $sHP";
		echo "<br>";
		$scheckplus_path = $_SERVER['DOCUMENT_ROOT']."/SCheckPlus";
		echo "경로 : $scheckplus_path";
		echo "<br>";
		//인자값 : AUTH 사이트코드 사이트패스워드 주민등록번호 이통사구분(1/2/3) 휴대전화번호 요청SEQ(option)
		$sResultData = $scheckplus_path AUTH $sSiteCode $sSitePw $sJumin $sHPComp $sHP $sRequestSeq;
		echo "sResultData : $sResultData";
		print_r($sResultData);
        echo "<br>";
		$decode_res = json_decode($sResultData);
		//결과 : 응답코드|요청SEQ|응답SEQ
		echo "결과 : $decode_res";
	}
}
