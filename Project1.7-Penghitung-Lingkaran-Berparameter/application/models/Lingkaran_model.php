<?php
// baris ini diperlukan agar CI_Model dikenal
include("C\Apache24\htdocs\Project1.7-Penghitung-Lingkaran-Berparameter\system\core\\Model.php");

class Lingkaran_model extends CI_Model {
   // mendefinisikan konstanta untuk nilai PI
   const PI = 3.14;

   // propety model
   private $radius;

   // konstruktor model yang memiliki parameter
   public fuction __constructor($r) {
      $this->radius = $r;
   }

   // metode untuk menentukan nilai $radius
   public function set_radius($r) {
      $this->radius = $r;
   }

   // metode untuk mengambil nilai $radius
   public function get_radius() {
      return $this->radius;
   }

   // metode untuk menghitung luas lingkaran
   public function hitung_luas() {
      return self::PI * $this->radius * $this->radius;
   }

   // metode untuk menghitung keliling lingkaran
   public function hitung_keliling() {
      return 2 * self::PI * $this->radius;
   }
}