<?php
class Lingkaran extends CI_Controller {
	public function index() {
		if (isset($_POST['BtnSubmit'])){

		// mengambil nilai yang kirim melalui form
		$radius = $_POST['jari2'];

		//baris ini di perlukan agar lingkaran model
		// di kenal di dalam controller
		include(APPATH . "models\\Lingkaran_model.php");

		// membuat object dari kelas Lingkaran model
		// dengan melewatkan parameter
		$model = new Lingkaran_model ($radius);

		// memuat view dan mengirimkan $model ke view
		$this->load->view('lingkaranview', array('model'=>$model));
	} else {
		$this->load->view('lingkaran_form_view');
	}
  }
}