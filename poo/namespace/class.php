<?php declare(strict_types = 1);
   
   namespace Antik\model;

   /**
    * Class Child
    */
   class Child
   {
      public function __construct() {
         echo __METHOD__.' i Am here'.PHP_EOL;
      }
   }

   /**
    * Class Parent
    */
   class Father 
   {
      
      public function __construct()
      {
         echo __METHOD__.' i Am here'.PHP_EOL;
      }
   }

   function start($str='function') {
      echo "i am call the $str";
   }

   const CHAR_KEY = 'mi pana miguel';

?>