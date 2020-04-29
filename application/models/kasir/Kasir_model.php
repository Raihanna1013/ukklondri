<?php 
 class Kasir_model extends CI_Model{

 	//admin punya
 	public function insert_admin($data){
 		$this->db->insert('tb_user',$data);
 		}
 	public function tampil_admin(){
 		$this->db->select(['tb_user.id','tb_user.nama', 'tb_user.username',]);
 		$this->db->where('tb_user.role','admin');
 		// $this->db->where('jenis_surat.Id_jenis =1');
 		$this->db->from('tb_user');
 		$role = $this->db->get();
 		return $role->result();
 	}
 	public function login_admin($username,$password){
 		$ChkAdmin= $this->db->where(['username'=> $username, 'password'=>$password])->get('tb_user');
 		if($ChkAdmin->num_rows()>0){
					return $ChkAdmin->row_array();
				}else{
					return FALSE;
				}
 	}
 	public function get_admin($id){
			$query = $this->db->where('id', $id)->get('tb_user');
			if($query->num_rows()>0){
				return $query->row();
			}
		}
	public function update_admin($table,$data,$id){
		$this->db->where('id',$id);
		$this->db->update($table, $data);
	}
 	//kasir punya
 	public function insert_kasir($data){
 		$this->db->insert('tb_user',$data);
 	}
 	public function tampil_kasir(){
 		$this->db->select(['tb_user.id','tb_user.nama', 'tb_user.username',]);
 		$this->db->where('tb_user.role','kasir');
 		// $this->db->where('jenis_surat.Id_jenis =1');
 		$this->db->from('tb_user');
 		$role = $this->db->get();
 		return $role->result();
 	}
 	//owner punya
 	public function insert_owner($data){
 		$this->db->insert('tb_user',$data);
 	}
 	public function tampil_owner(){
 			$this->db->select(['tb_user.id','tb_user.nama', 'tb_user.username',]);
 		$this->db->where('tb_user.role','owner');
 		// $this->db->where('jenis_surat.Id_jenis =1');
 		$this->db->from('tb_user');
 		$role = $this->db->get();
 		return $role->result();
 	}
 	//paket
 	public function insert_paket($data){
 		$this->db->insert('tb_paket',$data);
 	}
 	public function tampil_paket(){
 		$this->db->select(['tb_paket.id_paket','tb_paket.jenis','tb_paket.harga']);
 		$this->db->from('tb_paket');
 		$role = $this->db->get();
 		return $role->result();
 	}
 	public function get_paket($id){
 		$query = $this->db->where('id_paket', $id)->get('tb_paket');
 	if($query->num_rows()>0){
					return $query->row();

				}	
 	}
 	public function update_paket($table,$data,$id){
			$this->db->where('id_paket',$id);
					$this->db->update($table, $data);
	}
 	

 	//outlet punya
 	public function insert_outlet($data){
 		$this->db->insert('tb_outlet',$data);
 	}
 	public function tampil_outlet(){
 		$this->db->select(['tb_outlet.id','tb_outlet.nama','tb_outlet.alamat','tb_outlet.tlp']);
 		$this->db->from('tb_outlet');
 		$role = $this->db->get();
 		return $role->result();
 	}
 	public function get_outlet($id){
 		$query = $this->db->where('id', $id)->get('tb_outlet');
 			if($query->num_rows()>0){
					return $query->row();

				}				
 	}
 		public function update_outlet($table,$data,$id){
			$this->db->where('id',$id);
					$this->db->update($table, $data);
	}
 	
 	//member punya 
 	public function insert_member($data){
 		$this->db->insert('tb_member',$data);
 	}
 	public function tampil_member(){
 		$this->db->select(['tb_member.id','tb_member.nama','tb_member.alamat','tb_member.tlp']);
 		$this->db->from('tb_member');
 		$role = $this->db->get();
 		return $role->result();
 	}

	public function get_member($id){
			$query = $this->db->where('id', $id)->get('tb_member');
				if($query->num_rows()>0){
					return $query->row();

				}	
		}
	public function update_member($table,$data,$id){
			$this->db->where('id',$id);
					$this->db->update($table, $data);
	}

		
		
 	//transaksi
 	public function insert_transaksi($data){
 		$this->db->insert('transaksi', $data);

 		// $this->db->where('id_outlet',$id_outlet);
 		// $result = $this->db->get('transaksi')->result();
 	 // 	return$result; 	
 	}
 	public function insert_detail($data){
 		 $this->db->insert('tb_detail_transaksi', $data); 
 		
 	}
 	
 	public function ambil_outlet(){
 		$this->db->order_by('id','ASC');
 		return $this->db->from('tb_outlet')->get()->result();
 		// $this->db->where('id_outlet',$id_outle
 		// $result = $this->db->get('transaksi')->result();
 	 // 	return $result; 
 	}
 	public function ambil_member(){
 		$this->db->order_by('id', 'ASC');
 		return $this->db->from('tb_member')->get()->result();
 		// $this->db->where('id',$id_member);
 		// $result = $this->db->get('tb_member')->result();
 	 // 	return $result; 
 	}
 	
 	public function ambil_paket(){
 		$this->db->order_by('id_paket', 'ASC');
 		return $this->db->from('tb_paket')->get()->result();
 	}

 }
 ?>