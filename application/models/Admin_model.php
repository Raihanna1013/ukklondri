<?php 
	class Admin_model extends CI_Model{

			public function get_member($id){
			$query = $this->db->where('id', $id)->get('tb_member');
				if($query->num_rows()>0){
					return $query->row();

				}	
		}
	}
 ?>