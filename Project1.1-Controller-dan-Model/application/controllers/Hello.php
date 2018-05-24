<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hello extends CI_Controller {
	public function index() {

    // memuat model dengan nama Hello_model
    $this->load->model ('Hello_model');

    // menangkap object dari kelas Hello_model
    // yang telah dimuat ke variabel 
    $model = $this->Hello_model;
	
		echo "<html>";
		echo "<html><title>Controller dan Model</title></head>";
		echo "<body>";

		// memangil properti  $str milik object $model
		echo "<h2>" .$model-> str . "<h2>";

		echo "</body>";
		echo "</html>";
		}
	}