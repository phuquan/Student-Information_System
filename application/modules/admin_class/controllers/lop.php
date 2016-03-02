<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lop extends MY_Controller{
	private $navigation;
	function __construct(){
		parent::__construct();
		$this->navigation['post']['link'] = 'admin_class/lop/index';
		$this->navigation['post']['title']='Danh sách lớp';
		$this->navigation['add']['link']='admin_class/lop/add';
		$this->navigation['add']['title'] = 'Thêm mới lớp';
	}
	
	public function index(){
		$data['title'] = 'Quảng lý lớp học';
		$data['tabs'] = 'Danh sách lớp';
		$data['navigation']=$this->navigation;

		$this->load->view('admin/layout/home', $data);
	}
	public function add(){
		$data['title'] = 'Quảng lý lớp học';
		$data['tabs'] = 'Thêm sinh lớp';
		$data['navigation']=$this->navigation;

		$this->load->view('admin/layout/home', $data);
	}
}
