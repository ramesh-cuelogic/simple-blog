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
    
    function insertOrUpdate( $arrstrData ) {
        
        $arrmixData = array(
            'title'     => $arrstrData['title'],
            'url_name'  => url_title( $arrstrData['title'] ),
            'body'      => $arrstrData['body']
        );

        if( true == is_numeric( $arrstrData['id'] )) {
            
            $this->db->where( 'id', $arrstrData['id'] )->update( 'posts', $arrmixData );
        } else {

            $this->db->insert( 'posts', $arrmixData );
        }

        return true;
    }

}
/* End of file blog_model.php */
/* Location: ./application/models/blog_model.php */