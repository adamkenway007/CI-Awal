<?php
class Demo_view extends CI_Controller {
	public function index() {

		// memuat view sebagai data
		$header = $this->load->view('headerview', '' , TRUE);
		$konten = $this->load->view('contentview', '' , TRUE);
		$footer = $this->load->view('footerview', '' , TRUE);

		// menampilkan data
		echo $header,$konten,$footer;
	}
}