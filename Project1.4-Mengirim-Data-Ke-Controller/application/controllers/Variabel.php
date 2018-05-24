<?php
class Variabel extends CI_Controller {
	public function index() {
	// data yang akan dikirim ke view
	$data = ['variabel1' => 'CodeIgniter','variabel2'=>'3.x'];

	// mengirim data ke view
	$this->load->view('variabelview', $data);

	}
}