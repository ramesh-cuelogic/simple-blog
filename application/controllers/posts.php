<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Posts extends CI_Controller {

	public function index()	{
		$this->load->view( 'posts/view_posts.phtml' );
	}

	public function view() {
		$this->load->view( 'posts/view_post.phtml' );	
	}
}

/* End of file posts.php */
/* Location: ./application/controllers/posts.php */