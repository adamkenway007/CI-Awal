<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hello extends CI_Controller {
	public function index() {

    // memuat model dengan nama Hello_model
    $this->load->view ('helloview');
 
   }
}
