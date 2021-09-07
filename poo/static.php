<?php declare(strict_types = 1);
   
   /**
    * Class for static function and atributes
    */
   class Car
   {
      private static string $currentColor;
      public int $classCounter;
      // atribute estatico publico
      public static int $counter = 0;

      public function __construct()
      {
         //up 
         $this->classCounter++;
         self::$counter++;
      }

      public static function setColor(string $val = 'red')
      {
         self::$currentColor = $val;
         // $this->currentColor = $val;
      }

      public function getColor() : string
      {
         return self::$currentColor;
      }
   }

   $car = new Car();
   print_r('static '.Car::$counter.' class '.$car->classCounter.PHP_EOL);
   $car1 = new Car();
   print_r('static '.Car::$counter.' class '.$car1->classCounter.PHP_EOL);

   Car::setColor();
   print_r('get color '.$car->getColor().' static');

?>