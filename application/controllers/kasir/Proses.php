<?php 
	class Proses extends CI_Controller{
public function __construct(){
		parent::__construct();
		$this->load->model("admin/Admin_model");
	}
	//admin punya

	public function tambah_admin(){
		$data = array(
			'nama'=> $this->input->post('nama'),
			'username'=> $this->input->post('username'),
			 'password'=> $this->input->post('password'),
			 'role' => admin
			);
			
			$ka = $this->Admin_model->insert_admin($data);
			if($ka){
				return redirect(base_url('admin/Dashboard/tambah_admin'));
			}else{
				return redirect(base_url('admin/Dashboard/data_admin'));
			}
			$this->tambah_adminv();
	}
	

		public function tambah_adminv(){
		$this->load->view('admin/admin_form');
	} 
	

	public function admin_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$cek = $this->Admin_model->login_admin($username,$password);
		echo $cek['role']; 
		if($cek > 0 ){
		// print_r($cek); exit();
		echo base_url("admin/Dashboard");

		
			if($cek['role'] =="admin"){
				$sessionData = [				
					'admin_id' => $cek->id,
					'username' => $username,
				    $_SESSION['role'] => "admin"
				];
				 // print_r($sessionData); exit();
				$this->session->set_userdata($sessionData);
				return redirect(base_url("index.php/admin/Dashboard"));
				
			}elseif($cek['role'] == "kasir"){
				
				$sessionData = [ 
					'admin_id' => $cek->id,
					'username' => $cek->username,
					$_SESSION['role'] => "kasir"
				];
				$this->session->set_userdata($sessionData);
				return redirect(base_url("kasir/Dashboard"));
				echo '13';
			}elseif($cek['role'] == "owner"){
				$sessionData = [ 
					'admin_id' => $cek->id,
					'username' => $cek->username,
					$_SESSION['role'] => "owner"
				];
				$this->session->set_userdata($sessionData);
				return redirect(base_url("owner/Dashboard"));
			}
		}else{
			$this->session->set_flashdata("message", "password atau username salah!");
			return redirect(base_url('Welcome'));
			
		}
		$this->login_admin();
	}

	public function edit_admin(){
			$id = $this->input->post('id');
		$data = array(
			'nama' => $this->input->post('nama'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password')
		);
		$ka = $this->Admin_model->update_admin('tb_user',$data,$id);
		if($ka){
				return redirect(base_url('admin/Dashboard/edit_admin'));
		}else{
			return redirect(base_url('admin/Dashboard/data_admin'));
		}
		$this->edit_member();
	}

	//kasir punya
	public function tambah_kasir(){

		$data = array(
			'nama'=> $this->input->post('nama'),
			'username'=> $this->input->post('username'),
			 'password'=> $this->input->post('password'),
			 'role' => kasir
			);
			
			$ka = $this->Admin_model->insert_kasir($data);
			if($ka){
				return redirect(base_url('admin/Dashboard/tambah_kasir'));
			}else{
				return redirect(base_url('admin/Dashboard/data_karyawan'));
			}
			$this->tambah_kasir();
	}

	public function edit_kasir(){
			$id = $this->input->post('id');
		$data = array(
			'nama' => $this->input->post('nama'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password')
		);
		$ka = $this->Admin_model->update_admin('tb_user',$data,$id);
		if($ka){
				return redirect(base_url('admin/Dashboard/edit_kasir'));
		}else{
			return redirect(base_url('admin/Dashboard/data_kasir'));
		}
		$this->edit_member();
	}


	//owner punya
	public function tambah_owner(){
		$data = array(
			'nama'=> $this->input->post('nama'),
			'username'=> $this->input->post('username'),
			 'password'=> $this->input->post('password'),
			 'id_outlet'=> $this->input->post('id_outlet'),
			 'role' => owner
			);
		$ka = $this->Admin_model->insert_kasir($data);
			if($ka){
				return redirect(base_url('admin/Dashboard/tambah_owner'));
			}else{
				return redirect(base_url('admin/Dashboard/data_owner'));
			}
			$this->tambah_kasir();
	}
	public function edit_owner(){
		$id = $this->input->post('id');
		$data = array(
			'nama' => $this->input->post('nama'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password')
		);
		$ka = $this->Admin_model->update_admin('tb_user',$data,$id);
		if($ka){
				return redirect(base_url('admin/Dashboard/edit_owner'));
		}else{
			return redirect(base_url('admin/Dashboard/data_owner'));
		}
		$this->edit_member();
	}
	//paket
	public function tambah_paket(){
		$data = array(
			'jenis' => $this->input->post('jenis'),
			'harga' =>$this->input->post('harga')
		);
		$ka = $this->Admin_model->insert_paket($data);
		if($ka){
			return redirect(base_url('admin/Dashboard/tambah_paket'));
		}else{
			return redirect(base_url('admin/Dashboard/paket_laundry'));
		}
		$this->tambah_paket();
	}
	public function edit_paket(){
		$id = $this->input->post('id_paket');
		$data = array(
			'jenis' => $this->input->post('jenis'),
			'harga' => $this->input->post('harga'),
			
		);
		$ka = $this->Admin_model->update_paket('tb_paket',$data,$id);
		if($ka){
				return redirect(base_url('admin/Dashboard/edit_paket'));
		}else{
			return redirect(base_url('admin/Dashboard/paket_laundry'));
		}
		$this->edit_paket();
	}
	//outlet
	public function tambah_outlet(){
		$data = array(
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'tlp' => $this->input->post('tlp'),
		);
		$ka = $this->Admin_model->insert_outlet($data);
		if($ka){
			return redirect(base_url('admin/Dashboard/tambah_outlet'));
		}else{
			return redirect(base_url('admin/Dashboard/data_outlet'));
		}
		$this->tambah_outlet();
	}
	public function edit_outlet(){
		$id = $this->input->post('id');
		$data = array(
				'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'tlp' => $this->input->post('tlp'),
			
		);
		$ka = $this->Admin_model->update_outlet('tb_outlet',$data,$id);
		if($ka){
				return redirect(base_url('admin/Dashboard/edit_outlet'));
		}else{
			return redirect(base_url('admin/Dashboard/data_outlet'));
		}
		$this->edit_paket();
	}

	//member
	public function tambah_member(){
		
		$data = array(
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'tlp' => $this->input->post('tlp'),
		);
		$ka = $this->Admin_model->insert_member($data);
		if($ka){
			return redirect(base_url('admin/Dashboard/tambah_member'));
		}else{
			return redirect(base_url('admin/Dashboard/data_member'));
		}
		$this->tambah_member();
	}

	public function edit_member(){
		$id = $this->input->post('id');
		$data = array(
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'tlp' => $this->input->post('tlp'),
		);
		$ka = $this->Admin_model->update_member('tb_member',$data,$id);
		if($ka){
				return redirect(base_url('admin/Dashboard/edit_member'));
		}else{
			return redirect(base_url('admin/Dashboard/data_member'));
		}
		$this->edit_member();
	}
	//transaksi 
	public function tambah_transaksi(){
		$data = array(
			'kode_invoice' => $this->input->post('kode_invoice'),
			'id_outlet' => $this->input->post('id_outlet'),
			'id_member' => $this->input->post('id_member'),
			'tgl' => $this->input->post('tgl'),
			'batas_waktu' =>$this->input->post('batas_waktu'),
				'status' => 'baru',
			'dibayar' => 'belum_bayar',
			'id_user' => 16,
			'biaya_tambahan' => 2000
		);
		$ka = $this->Admin_model->insert_transaksi($data);
		if($ka){
			return redirect(base_url('admin/Dashboard/tambah_transaksi'));
		}else{
			return redirect(base_url('admin/Dashboard/detail_transaksi'));
		}
		$this->tambah_transaksi();
	}


	public function tambah_detail(){
		 $this->session->set_userdata('invoice', $this->input->post('kode_invoice'));
		$this->session->set_userdata('outlet');
		$this->session->set_userdata('member');
		$this->session->set_userdata('masuk');
		$this->session->set_userdata('batas');
		$data = array(
			'id_paket' => $this->input->post('id'),
			$_SESSION['id'] => $this->input->post('id_transaksi'),
			'qty' => $this->input->post('qyt'),
			'harga' =>$this->input->post('harga'),
			'keterangan' => $this->input->post('keterangan')
		);
		$ka = $this->Admin_model->insert_detail($data);
		if($ka){
			return redirect(base_url('admin/Dashboard/detail_transaksi'));
		}else{
			return redirect(base_url('admin/Dashboard/transaksi'));
		}
		$this->tambah_detail();
	}
}
  