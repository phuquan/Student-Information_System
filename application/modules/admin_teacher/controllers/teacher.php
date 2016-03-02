<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Teacher extends MY_Controller{
	private $navigation;
	function __construct(){
		parent::__construct();
		$this->navigation['post']['link'] = 'admin_teacher/teacher/index';
		$this->navigation['post']['title']='Danh sách giảng viên';
		$this->navigation['add']['link']='admin_teacher/teacher/add';
		$this->navigation['add']['title'] = 'Thêm mới giảng viên';
	}
	
	public function index(){
		$data['title'] = 'Quản lý giảng viên';
		$data['navigation']= $this->navigation;
		$data['tabs']= 'Danh sách giảng viên';
		$data['template']= 'admin_teacher/teacher/index';
		$this->load->view('admin/layout/home', $data);
	}
	public function add(){
		$data['title'] = 'Quản lý giảng viên';
		$data['navigation']= $this->navigation;
		$data['tabs']= 'Thêm mới giảng viên';
		$data['add']['title'] = 'Thêm mới giảng viên';
		$data['template']= 'admin_teacher/teacher/add';

		$this->load->view('admin/layout/home', $data);
	}

	public function update(){
		$data['title'] = 'Quản lý giảng viên';
		$data['tabs']= 'Cập nhật thông tin giảng viên';
		$data['navigation']= $this->navigation;

		$this->load->view('admin/layout/home', $data);
	}
	public function delete(){

		$data['title'] = 'Quản lý giảng viên';
		$data['tabs']= 'Xóa giảng viên';
		$data['navigation']= $this->navigation;
		
		$this->load->view('admin/layout/home', $data);
	}
}
