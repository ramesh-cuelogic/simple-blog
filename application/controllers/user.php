<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	public function index() {
		$this->load->view( 'view_user.phtml' );
	}

	public function login() {
		$this->load->view( 'user/login.phtml' );
	}
}

/* End of file user.php */
/* Location: ./application/controllers/user.php */