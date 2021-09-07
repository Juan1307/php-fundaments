<?php declare(strict_types = 1); 

   /**
    * Class Abstract
    */

   abstract class Shape
   {
      private string $color;
      private const COLORS_AVAILABLE = ['red','blue','green'];

      abstract public function getArea() : float;
      
      public function __construct(string $color)
      {
         $this->color = (in_array($color, self::COLORS_AVAILABLE)) ? $color : 'red';         
      }

      public function getColor() : string
      {
         return $this->color;
      }
   }

   class Square extends Shape
   {
      private float|int $width;

      public function __construct(float|int $width, string $color = 'red'){
         parent::__construct($color);
         $this->width = $width;
      }

      public function getArea() : float {
         return $this->width * 2;          
      }
   }

   class Triangle extends Shape 
   {
      public function __construct(
         private float|int $base,
         private float|int $height,
         string $color = 'blue' 
      ){
         parent::__construct($color);
      }

      public function getArea() : float {
         return $this->base * $this->height / 2; 
      }

   }

   $s = new Square(12);
   echo 'SQUARE AREA'.PHP_EOL;
   echo $s->getColor().PHP_EOL;
   echo $s->getArea().PHP_EOL;

   $t = new Triangle(2, 13.3);
   echo 'TRIANGLE AREA'.PHP_EOL;
   echo $t->getColor().PHP_EOL;
   echo $t->getArea().PHP_EOL;

?>