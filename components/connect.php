<?php

   $db_name = 'mysql:host=127.0.0.1:3306;dbname=u145796668_imob';
   $db_user_name = 'u145796668_imob';
   $db_user_pass = 'Parangaricu@1';

   $conn = new PDO($db_name, $db_user_name, $db_user_pass);

   function create_unique_id(){
      $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
      $charactersLength = strlen($characters);
      $randomString = '';
      for ($i = 0; $i < 20; $i++) {
          $randomString .= $characters[mt_rand(0, $charactersLength - 1)];
      }
      return $randomString;
  }

?>