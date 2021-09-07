<?php declare(strict_types = 1);

   require_once 'Interface.php';

   // class
   require_once 'Bird.php';
   require_once 'Duck.php';
   require_once 'Penguin.php';

   $b = new Bird();
   $b->canFly();
   $b->canWalk();

   $p = new Penguin();
   $p->canSwim();
   $p->canDown();

   $d = new Duck();

   $d->canFly();
   $d->canWalk();
   $d->canSwim();
   $d->canDown();

   function canDoit(object $obj) : bool {
      return ($obj instanceof Fly) ? true : false;
   }

   var_dump(canDoit($b));
   var_dump(canDoit($p));
   var_dump(canDoit($d));

?>