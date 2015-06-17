<?php if ( ! defined( 'BASEPATH' ) ) exit( 'No direct script access allowed' );

class Posts extends CI_Controller {

	function __constructor() {
		parent::__constructor();
	}
	/*
	* Function to display all posts
	*/
	public function index()	{
			
		$arrobjPosts = $this->blog_model->fetchAllPosts();

		$this->load->view( 'posts/view_posts.phtml', array( 'posts' => $arrobjPosts ) );
	}

	/*
	* Function to display single post
	*/
	public function viewPost() {
		$strUrlName = $this->uri->segment( 2 );
		
		$objPost = $this->blog_model->fetchAllPostByUrlName( $strUrlName );

		if( false == is_array( $objPost ) || false == isset( $objPost[0] ) ) {
			show_404();
			exit;
		}

		
		$this->load->view( 'posts/view_post.phtml', array( 'post' => $objPost[0] ) );	

	}
}

/* End of file posts.php */
/* Location: ./application/controllers/posts.php */