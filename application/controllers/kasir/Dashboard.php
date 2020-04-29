<?php 
	class Dashboard extends CI_Controller{
		public function __construct(){
		parent::__construct();
		$this->load->model("kasir/Kasir_model");
	}
		public function index(){
			$this->load->view('kasir/home');
		}
		
		//transaksi code
	public function transaksi(){
		$this->load->view('kasir/transaksi_v');
	}
	public function tambah_transaksi(){
	
		 $data['hasil'] = $this->Kasir_model->ambil_outlet();
		$data['member'] = $this->Kasir_model->ambil_member();
		$this->load->view('kasir/transaksi_from', $data);

	}

	public function detail_transaksi(){
		$data['hasil'] = $this->Kasir_model->ambil_paket();
		$this->load->view('kasir/transaksi_detail',$data);
	}
	//kasir Code
	public function data_kasir(){
		$data_kasir = $this->Kasir_model->tampil_kasir();
		$this->load->view('kasir/kasir_v',['kasir'=> $data_kasir]);
	}
	public function tambah_kasir(){
		$this->load->view('kasir/kasir_form');
	}

	//member code
	public function data_member(){
		$data_member = $this->Kasir_model->tampil_member();
		$this->load->view('kasir/member_v',['member'=>$data_member]);
	}
	public function tambah_member(){
		$this->load->view('kasir/member_form');
	}
	//member code
	
	public function edit_member($id){
		$this->load->model('kasir/Kasir_model');
		$query['member'] = $this->Kasir_model->get_member($id);
		$this->load->view('kasir/member_edit', $query);
	
	}
	//paket code
	public function paket_laundry(){
		$this->load->model('kasir/Kasir_model');
		$data_paket = $this->Kasir_model->tampil_paket();
		$this->load->view('kasir/paket_laundry',['paket' => $data_paket]);
	}

	public function tambah_paket(){
		$this->load->view('kasir/paket_form');
	}

	//outlet code
	public function data_outlet(){
		$this->load->model('kasir/Kasir_model');
		$data_outlet = $this->Kasir_model->tampil_outlet();
		$this->load->view('kasir/outlet_v',['outlet' => $data_outlet]);
	}
	public function tambah_outlet(){
	
		$this->load->view('kasir/outlet_form');
	}




}
	

 ?>