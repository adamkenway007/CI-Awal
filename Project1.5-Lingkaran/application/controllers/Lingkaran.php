<?php
class Lingkaran extends CI_Controller {
	public function index() {
	// memuat model Lingkaran_model
	$this->load->model('Lingkaran_model');

	// menangkap model yang telah dimuat oleh controller
	$model = $this->Lingkaran_model;

	// menentukan nilai $radius
	$model->set_radius(3);

	// memuat view dan mengirimkan $model ke view
	$this->load->view ('lingkaranview', array ('model'=>$model));
	}
}