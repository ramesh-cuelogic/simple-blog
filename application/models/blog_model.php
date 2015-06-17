<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }
 
    function fetchAllPosts() {
        $query = $this->db->get( 'posts' );
        return $query->result();
    }

    function fetchAllPostByUrlName( $strUrlName ) {
        $query = $this->db->where( 'url_name', $strUrlName )->get( 'posts' );
        return $query->result();
    }
 
    function validate() {

    }
    
    function insert( $name,$body ) {
        $data = array(
            'entry_name' => $name,
            'entry_body' => $body
        );
        $this->db->insert('entry',$data);
    }

}
/* End of file blog_model.php */
/* Location: ./application/models/blog_model.php */