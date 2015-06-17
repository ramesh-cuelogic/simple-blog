<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Post_Model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }
 
    function insert( $name, $body ) {
        
        $data = array(
            'entry_name' => $name,
            'entry_body' => $body
        );

        $this->db->insert( 'entry',$data );
    }
}
 
/* End of file posts_model.php */
/* Location: ./application/models/posts_model.php */