<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller{

	function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$data['title'] = 'Trang quản trị';
		$this->load->view('layout/home', $data);
	}
	public function info(){
		$data['title'] = 'Trang quản trị';
		$this->load->view('layout/home', $data);
	}
	public function logout(){
		echo "string";
	} 
}
