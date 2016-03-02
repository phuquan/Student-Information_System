<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class System extends MY_Controller{

	function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$data['title'] = 'Quản lý hệ thống';
		$this->load->view('admin/layout/home', $data);
	}

}
