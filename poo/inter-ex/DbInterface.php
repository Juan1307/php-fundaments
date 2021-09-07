<?php declare(strict_types = 1);

   interface DbInterface{
      public function getData();
      public function postData(bool $flag, array $data);
      public function deleteData(int $id);
   } 

 ?>