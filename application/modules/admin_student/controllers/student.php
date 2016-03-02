<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Student extends MY_Controller{

	private $navigation;
	function __construct(){
		parent::__construct();
		$this->navigation['post']['link'] = 'admin_student/student/index';
		$this->navigation['post']['title']='Danh sách sinh viên';
		$this->navigation['add']['link']='admin_student/student/add';
		$this->navigation['add']['title'] = 'Thêm mới sinh viên';
	}
	
	public function index(){
		$data['title'] = 'Quảng lý sinh viên';
		$data['tabs'] = 'Danh sách sinh viên';
		$data['navigation']=$this->navigation;

		$data['template']= 'admin_student/student/index';
		$this->load->view('admin/layout/home', $data);
	}
	public function add(){
		$data['title'] = 'Quảng lý sinh viên';
		$data['tabs'] = 'Thêm sinh viên';
		$data['navigation']=$this->navigation;
		$data['template']= 'admin_student/student/add';

		$this->load->view('admin/layout/home', $data);
	}
}
