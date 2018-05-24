<?php
class Segiempat extends CI_Controller {
	public function index() {
		if(isset($_POST['btnSubmit'])) {
			// baris di bawah ini tidak perlu di sertakan
			// karena model akan dimuat secara otomatis
			//$this->load->model('Segiempat_model');

			// menangkap model yang telah dimuat secara otomatis
			$model = $this->segiempat_model;

			// mengambil nilai yang dikirim melalui form
			$p = $_POST['panjang'];
			$l = $_POST['lebar'];

			// menentukan nilai attribut $panjang dan $lebar
			// di dalam objek $model
			$model->set_panjang($p);
			$model->set_lebar($l);

			// memuat view dan mengirimkan $model ke view
			$this->load->view('segiempatview',array('model'=>$model));
		} else {

			$this->load->view('segiempat_form_view');
		}
	}
}