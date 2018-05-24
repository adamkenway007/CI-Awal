<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hello extends CI_Controller {
	public function index() {

    // memuat model dengan nama Hello_model
    $this->load->model ('Hello_model');

    // menangkap object dari kelas Hello_model
    // yang telah dimuat ke variabel $model
    $model = $this->Hello_model;

    // mengambil data dari model
    $s = $model->str;

    // membuat data yang akan dikirim ke view
    // dalam bentuk array
    $data ['teks'] =  $s;

    // memuat view 'helloview'
    // dengan mengirim data ke view bersangkutan
    $this->load->view('helloview', $data);

   }
}
