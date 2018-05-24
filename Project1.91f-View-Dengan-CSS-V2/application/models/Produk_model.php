<?php
class Produk_model extends CI_Model {
   public $id;
   public $nama;
   public $harga;

   // array untuk menyimpan label dari masing-masing atribut.
   public $labels = [];

   // konstruktor model
   public function __construct() {
      parent::__construct();
      $this->labels = $this->attribute_labels();
      $this->load->database();
   }

   // metode untuk otentikasi user
   public function get_table_name() {
      return 'produk';
   }

   public function insert() {
      $this->db->insert($this->get_table_name(), $this,
                       ['id'=>$this->id]);
   }

   public function update() {
      $this->db->update($this->get_table_name(), $this,
                       ['id'=>$this->id]);
   }

   public function delete() {
   $this->db->update($this->get_table_name(), $this,
                       ['id'=>$this->id]);
   }

   public function attribute_labels() {
      return[
         'id'=>'Kode:',
         'nama'=>'Nama Produk:',
         'harga'=>'Harga:'
      ];
   }
}
