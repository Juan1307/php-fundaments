<?php declare(strict_types = 1);

   // modo cool xD
   use Antik\model\{Child, Father};
   
   use function Antik\model\start;
   use const Antik\model\CHAR_KEY;

   require_once 'class.php';

   // sin use
   /*$c = new \Antik\model\Child();
   \Antik\model\start();*/

   $c = new Child();
   $f = new Father();
   
   var_dump($f);
   var_dump($c);
   var_dump(start());
   var_dump(CHAR_KEY);
?>