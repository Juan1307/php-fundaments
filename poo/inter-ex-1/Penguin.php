<?php declare(strict_types = 1);

   /**
    * Class Penguin
    */
   class Penguin implements Swim
   {
      public function canSwim(){
         echo __CLASS__.': I can swim'.PHP_EOL;
      }

      public function canDown(){
         echo __CLASS__.': I can down'.PHP_EOL;
      }
   }
?>