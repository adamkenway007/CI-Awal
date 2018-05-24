<?php
class User_model extends CI_Model {
   public $username;
   public $password;

   // array untuk menyimpan label dari masing-masing atribut.
   public $labels = [];

   // konstruktor model
   public function __construct() {
      parent::__construct();
      $this->labels = $this->attribute_labels();
   }

   // metode untuk otentikasi user
   public function authenticate() {
      if (isset($this->username) && isset ($this->password)) {
         if ($this->username === 'demo' && $this->password === 'demo')
   {
         return TRUE;
      } else {
         return FALSE;        
      }

      } else {
         return FALSE;
      }
   }
 
   // metode untuk menentukan label dari masing-masing attribut
   public function attribute_labels() {
      return [
         'username' => 'Username;',
         'password' => 'Password;'
      ];
   }

}
   