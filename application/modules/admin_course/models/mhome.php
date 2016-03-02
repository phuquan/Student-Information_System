<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MHome extends My_Model{

	private $student = 'student';
	public $validation_login;
	public $validation_change_password;
	function __construct(){
		parent::__construct();
		$this->student = 'student';
		$this->validation_login = array(
			array('field' => 'id', 'label' => 'Tài khoản', 'rules' => 'trim|required'),
			array('field' => 'password', 'label' => 'Mật khẩu', 'rules' => 'trim|required|callback__authentication'),
		);
		$this->validation_login_capchar = array(
			array('field' => 'id', 'label' => 'Tài khoản', 'rules' => 'trim|required'),
			array('field' => 'password', 'label' => 'Mật khẩu', 'rules' => 'trim|required|callback__authentication'),
			array('field' => 'capchar', 'label' => 'Capchar', 'rules' => 'trim|required|callback__captcha'),
		);
	}


	public function getStudent($param = NULL){
		$student = $this->_getwhere(array(
			'select' => (isset($param['select'])?$param['select']:'MaSV, HoLot, Ten'),
			'table' => $this->student,
			'param_where' => $param['param_where']
		));
		if(isset($param['validation']) && $param['validation'] == TRUE){
			if(!isset($student) || is_array($student) == FALSE || count($student) == 0){
				message_flash('Người dùng không tồn tại', 'error');
				redirect(site_url());
			}
		}
		return $student;
	}

	public function getStudent_byID($MaSV = '', $select = 'MaSV, HoLot, Ten', $validation = FALSE){
		return $this->getStudent(array(
			'select' => $select,
			'validation' => $validation,
			'param_where' => array('MaSV' => $MaSV)
		));
	}	
}
