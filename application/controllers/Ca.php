<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ca extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$this->mng('bc');
	}

	public function mng($page){
		switch ($page){
			case 'bc':
				$this->load->view('old/mng/bc');
				break;
			case 'ab':
				$this->load->view('old/mng/ab');
				break;
		}
	}

	public function intl($page){
		switch ($page){
			case 'bicc':
				$this->load->view('old/intl/bicc');
				break;
			case 'sgb':
				$this->load->view('old/intl/sgb');
				break;
			case 'tale':
				$this->load->view('old/intl/tale');
				break;
			case 'umc':
				$this->load->view('old/intl/umc');
				break;
		}
	}

	public function bod($page){
		switch ($page){
			case 'lakefield':
				$this->load->view('old/bod/lakefield');
				break;
			case 'ridely':
				$this->load->view('old/bod/ridely');
				break;
			case 'pickering':
				$this->load->view('old/bod/pickering');
				break;
			case 'bodwell':
				$this->load->view('old/bod/bodwell');
				break;
		}
	}

	public function publ($page){
		switch ($page){
			case 'york_catholic':
				$this->load->view('old/publ/york_catholic');
				break;
			case 'york':
				$this->load->view('old/publ/york');
				break;
			case 'tor_catholic':
				$this->load->view('old/publ/tor_catholic');
				break;
			case 'tor':
				$this->load->view('old/publ/tor');
				break;
			case 'north_van':
				$this->load->view('old/publ/north_van');
				break;
			case 'langley':
				$this->load->view('old/publ/langley');
				break;
			case 'vancouver':
				$this->load->view('old/publ/vancouver');
				break;
			case 'burnaby':
				$this->load->view('old/publ/burnaby');
				break;
			case 'coqui':
				$this->load->view('old/publ/coqui');
				break;
		}
	}

	public function gdn(){
		$this->load->view('old/gdn/gdn');
	}

	public function family(){
		$this->load->view('old/fm/family');
	}

	public function college($page){
		switch ($page){
			case 'major':
				$this->load->view('old/col/major');
				break;
			case 'area':
				$this->load->view('old/col/area');
				break;
		}
	}

}

