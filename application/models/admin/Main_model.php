<?php 
	class Main_model extends CI_Model{

		public function insert_karyawan($data){
			$this->db->insert('tb_user',$data);
		}

	}
 ?>