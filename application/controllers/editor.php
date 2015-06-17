<?php if ( ! defined( 'BASEPATH' ) ) exit( 'No direct script access allowed' );

class Editor extends CI_Controller {

	/*
	* Function to display all posts created by user
	*/
	public function index() {
		$arrobjPosts = $this->blog_model->fetchAllPosts();

		$this->load->view( 'editor/view_posts.phtml', array( 'posts' => $arrobjPosts )  );
	}

	/*
	* Function to add new post
	*/
	public function addPost() {
		
		$this->load->view( 'editor/add_post.phtml' );
	}
	
	/*
	* Function to edit existing post
	*/
	public function editPost() {
		$strUrlName = $this->uri->segment( 3 );
		
		$objPost = $this->blog_model->fetchAllPostByUrlName( $strUrlName );

		if( false == is_array( $objPost ) || false == isset( $objPost[0] ) ) {
			show_404();
			exit;
		}

		$this->load->view( 'editor/edit_post.phtml', array( 'post' => $objPost[0] ) );
	}

	public function savePost() {
		
		$arrstrData['id'] 		= $this->input->post( 'id' );
		$arrstrData['title'] 	= $this->input->post( 'title' );
		$arrstrData['body'] 	= $this->input->post( 'body' );
			
		if( true == $this->blog_model->insertOrUpdate( $arrstrData ) ) {
			redirect( '/index.php/editor' );
		}
	}

	/*
	* Function to delete existing post
	*/
	public function deletePost() {
		//$this->load->view( 'editor/edit_post.phtml' );
	}

}

/* End of file editor.php */
/* Location: ./application/controllers/editor.php */