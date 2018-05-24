<?php
class Demo_view extends CI_Controller {
	public function index() {

		// memuat view sebagai data
		$this->load->view('demoview');
		
	}
}