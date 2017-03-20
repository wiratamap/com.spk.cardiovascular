<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pengetahuan_model extends CI_Model {
    
    function __construct()
    {
        parent::__construct();
    }
    
    function lihatData()
		{
			$sql = $this->db->query("select * from training");
            return $sql;
		}
	
}
