<?php declare(strict_types = 1); 

   require_once 'DbInterface.php';

   /**
    * Mysql DB
    */
   class Mysql implements DbInterface
   {
      public function getData() {
         echo "Get data by ".__CLASS__.PHP_EOL;      
      }

      public function postData(bool $flag, array $data) {
         echo "Post data by ".__CLASS__.PHP_EOL;         
      }

      public function deleteData(int $id) {
         echo "Delete data by ".__CLASS__.PHP_EOL;         
      }
      
   }
?>