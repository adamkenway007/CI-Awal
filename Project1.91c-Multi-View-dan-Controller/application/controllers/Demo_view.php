<?php
class Demo_view extends CI_Controller {
	public function index() {

		// memuat view demoview.php
		$this->load->view('headerview');
		$this->load->view('contentview');
		$this->load->view('footerview');
	}
}