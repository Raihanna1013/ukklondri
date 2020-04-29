<?php 
	 class Dashboard extends CI_Controller{

		public function index(){
			$this->session->set_flashdata("message", "sukses");
		$this->load->view('admin/home');
			
		}

	//transaksi code
	public function transaksi(){
		$this->load->view('admin/transaksi_v');
	}
	public function tambah_transaksi(){
		$this->load->model('Admin/Admin_model');
		 $data['hasil'] = $this->Admin_model->ambil_outlet();
		$data['member'] = $this->Admin_model->ambil_member();
		$this->load->view('admin/transaksi_from', $data);

	}
	
	public function detail_transaksi(){
		$this->session->set_userdata('invoice', $this->input->post('kode_invoice'));
		$this->session->set_userdata('outlet');
		$this->session->set_userdata('member');
		$this->session->set_userdata('masuk');
		$this->session->set_userdata('batas');
		$this->load->model('Admin/Admin_model');
		$data['hasil'] = $this->Admin_model->ambil_paket();
		$this->load->view('admin/transaksi_detail',$data);
	}
	//kasir Code
	public function data_kasir(){
		$this->load->model('Admin/Admin_model');
		$data_kasir = $this->Admin_model->tampil_kasir();
		$this->load->view('admin/kasir_v',['kasir'=> $data_kasir]);
	}
	public function tambah_kasir(){
		$this->load->model('Admin/Admin_model');
		 $data['hasil'] = $this->Admin_model->ambil_outlet();
		$this->load->view('admin/kasir_form',$data);
	}
	public function edit_kasir($id){
		$this->load->model('Admin/Admin_model');
		$query['kasir'] = $this->Admin_model->get_admin($id);
		$this->load->view('admin/kasir_edit', $query);
	}
	//owner code
	public function data_owner(){
		$this->load->model('Admin/Admin_model');
		$data_owner = $this->Admin_model->tampil_owner();
		$this->load->view('admin/table_owner',['owner' => $data_owner]);
	}

	public function tambah_owner(){
		$this->load->model('Admin/Admin_model');
		 $data['hasil'] = $this->Admin_model->ambil_outlet();
		$this->load->view('admin/owner_form',$data);
	}
	public function edit_owner($id){
		$this->load->model('Admin/Admin_model');
		$query['owner'] = $this->Admin_model->get_admin($id);
		$this->load->view('admin/owner_edit', $query);
	}
	//member code
	public function data_member(){
		$this->load->model('Admin/Admin_model');
		$data_member = $this->Admin_model->tampil_member();
		$this->load->view('admin/member_v',['member'=>$data_member]);
	}
	public function tambah_member(){
		$this->load->view('admin/member_form');
	}
	public function edit_member($id){
		$this->load->model('admin/Admin_model');
		$query['member'] = $this->Admin_model->get_member($id);
		$this->load->view('admin/member_edit', $query);
	}
	// public function edit_karyawan($id){
	// 	$this->load->model('Mian_model');
	// 	$kr = $this->Mian_model->get_karyawan($id);
	// 	$query['karyawan'] = $kr;
	// 	$this->load->view('edit_karyawan', $query);
	// }
	//admin code
	public function data_admin(){
		$this->load->model('Admin/Admin_model');
		$data_admin = $this->Admin_model->tampil_admin();
		$this->load->view('admin/admin_v',['admin'=> $data_admin]);
	}
	public function login(){
		$this->load->view('home');
	}
	public function tambah_admin(){
		$this->load->view('admin/admin_form');
	}
	public function edit_admin($id){
		$this->load->model('Admin/Admin_model');
		$query['admin'] = $this->Admin_model->get_admin($id);
		$this->load->view('admin/admin_edit', $query);
	}
	//paket code
	public function paket_laundry(){
		$this->load->model('Admin/Admin_model');
		$data_paket = $this->Admin_model->tampil_paket();
		$this->load->view('admin/paket_laundry',['paket' => $data_paket]);
	}

	public function tambah_paket(){
		$this->load->view('admin/paket_form');
	}
	public function edit_paket($id){
		$this->load->model('Admin/Admin_model');
		$query['paket'] = $this->Admin_model->get_paket($id);
		$this->load->view('admin/paket_edit', $query);
	}

	//outlet code
	public function data_outlet(){
		$this->load->model('admin/Admin_model');
		$data_outlet = $this->Admin_model->tampil_outlet();
		$this->load->view('admin/outlet_v',['outlet' => $data_outlet]);
	}
	public function tambah_outlet(){
	
		$this->load->view('admin/outlet_form');
	}

	public function edit_outlet($id){
		$this->load->model('admin/Admin_model');
		$query['outlet'] = $this->Admin_model->get_outlet($id);
		$this->load->view('admin/outlet_edit',$query);
	}
	public function laporan(){
		$this->load->view('admin/laporan_v');
	}

}
	 
 ?>