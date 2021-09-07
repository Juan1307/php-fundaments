<?php declare(strict_types = 1);
   
   require_once 'Interface.php';

   /**
    * Class Bird
    */
   class Bird implements Fly
   {
      public function canFly() {
         echo __CLASS__.': I can fly'.PHP_EOL;
      }

      public function canWalk() {
         echo __CLASS__.': I can walk'.PHP_EOL;
      }
   }
 ?>