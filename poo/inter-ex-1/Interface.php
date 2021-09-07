<?php declare(strict_types = 1);

   interface Swim {
      public function canSwim();
      public function canDown();
   }

   interface Fly {
      public function canFly();
      public function canWalk();
   }
?>