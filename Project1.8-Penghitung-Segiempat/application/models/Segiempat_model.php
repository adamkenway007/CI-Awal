<?php
class Segiempat_model extends CI_Model {
	private $panjang;
   private $lebar;

	// metode untuk menentukan nilai $radius
	public function set_panjang($p) {
		$this->panjang = $p;
   }

   // metode untuk menentukan nilai $radius
   public function get_panjang() {
    	return $this->panjang;
   }

   // metode untuk mengambil nilai $radius
   public function set_lebar($l) {
      $this->lebar = $l;
   }

   public function get_lebar() {
      return $this->lebar;
   }
   // metode untuk mengambil nilai $radius
   public function hitung_luas() {
      return $this->panjang * $this->lebar;
   }

   // metode untuk menghitung keliling lingkaran
   public function hitung_keliling() {
   	   return 2 * ($this->panjang + $this->lebar);
   }
 }
