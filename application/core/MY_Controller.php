<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller{

	public $authentication;
	public $language;
	public $redirect;
	public $system;
	public $useragent;
		
	function __construct(){
		parent::__construct();

		// Load thư viện cần thiết
		$this->load->library(array('form_validation', 'session', 'pagination', 'user_agent', 'cart'));
		$this->load->helper(array('url', 'mystring', 'mypagination', 'myuri'));
		// Redirect
		$redirect = $this->input->get('redirect');
		$this->redirect = !empty($redirect)?base64_decode($redirect):'';
		
		// Thông tin
		$this->useragent = $this->agent->agent_string();
	}

}
