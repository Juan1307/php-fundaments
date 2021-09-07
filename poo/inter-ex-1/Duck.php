<?php declare(strict_types = 1);

   require_once 'Interface.php';

   /**
    * Class Penguin
    */
   class Duck implements Swim, Fly
   {
      public function canSwim(){
         echo __CLASS__.': I can swim'.PHP_EOL;
      }

      public function canDown(){
         echo __CLASS__.': I can down'.PHP_EOL;
      }

      public function canFly() {
         echo __CLASS__.': I can fly'.PHP_EOL;
      }

      public function canWalk() {
         echo __CLASS__.': I can walk'.PHP_EOL;
      }

   }
?>