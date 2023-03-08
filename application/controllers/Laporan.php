<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	public function __construct() {
		parent::__construct();
		cek_login();
		$this->load->model('laporan_m');
		$this->load->model('outlet_m');
		$this->load->model('paket_m');

		if ($this->session->userdata('role') == 'kasir') {
			echo "Error Unauthorized";
			die;
		}
		
	}

	public function index()
	{
		$dari = $this->input->get('dari');
		$sampai = $this->input->get('sampai');
		$id_paket = $this->input->get('id_paket');
		$id_outlet = $this->input->get('id_outlet');

		$data['judul'] = "Data laporan";
		$data['laporan'] = $this->laporan_m->get_laporan($dari, $sampai, $id_paket, $id_outlet);
		$data['outlet'] = $this->outlet_m->get_outlet();
		$data['paket'] = $this->paket_m->get_paket();

		$this->load->view('templates/header', $data);
		$this->load->view('laporan/index', $data);
		$this->load->view('templates/footer', $data);
	}

	public function laporan_pdf(){

		$data['laporan'] = $this->laporan_m->pdf('tb_laporan')->result(); 
		$this->load->view('laporan/laporan_pdf', $data);
	    
		$this->load->library('pdf');
	    
		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "laporan-petanikode.pdf";
		$this->pdf->load_view('laporan/laporan_pdf', $data);
	    
	    
	    }

}