<?php
class Demo_view extends CI_Controller {
	public function index() {

		// memuat view demoview.php
		$this->load->view('demoview');
	}
}