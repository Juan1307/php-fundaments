<?php declare(strict_types = 1); 
   
   /**
    * Class constructors and destructors
    */
   class Car
   {
      /*private string $color = 'white';
      private int $weight;

      public function __construct(string $color, int $weight = 1000)
      {
         $this->weight = $weight;
         $this->color = $color;
      }*/

      public function __construct(
         private string $color = 'white',
         private int $weight = 1000,
      ){}

      public function getColor() : string
      {
         return $this->color.PHP_EOL; 
      }

      public function __destruct(){
         echo "DESTRUCT ATRIBB ".$this->weight.PHP_EOL;
      }

   }

   $car = new Car('red');
   $car1 = new Car('blue',3000);

   print_r($car);
   print_r($car1);

   print_r($car->getColor());
   print_r($car1->getColor());

/*   unset($car);
   sleep(2);

   print_r($car1);
*/
?>