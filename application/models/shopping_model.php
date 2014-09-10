<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Shopping_model extends CI_Model {
    
    function get_all(){
		$results = $this->db->get('products')->result();
		foreach($results as $result){
			if($result->option_value){
				$result->option_value = explode(',',$result->option_value);
			}
		}
		return $results;
	}
}
?>
