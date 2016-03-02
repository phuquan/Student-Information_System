<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Course extends MY_Controller{

	private $navigation;
	function __construct(){
		parent::__construct();
		$this->navigation['post']['link'] = 'admin_course/course/index';
		$this->navigation['post']['title']='Danh sách môn học';
		$this->navigation['add']['link']='admin_course/course/add';
		$this->navigation['add']['title'] = 'Thêm mới môn học';
	}
	
	public function index(){
		$data['title'] = 'Quảng lý môn học';
		$data['tabs'] = 'Danh sách môn học';
		$data['navigation']=$this->navigation;

		$this->load->view('admin/layout/home', $data);
	}
	public function add(){
		$data['title'] = 'Quảng lý môn học';
		$data['tabs'] = 'Thêm môn học';
		$data['navigation']=$this->navigation;

		$this->load->view('admin/layout/home', $data);
	}
}
