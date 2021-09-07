<?php declare(strict_types = 1);
   
   /**
    * Class for constants
    */
   class Car
   {
      private array $fullCar = [
         'MANUFACTURE' => NULL,
         'COLOR' => NULL,
         'YEAR' => 2000
      ];
      
      // inmutable contants
      const YEAR_LAST = 2021; //no casting type
      const YEAR_OLD = 1990; //no casting type
      
      const COLOR_GREEN = 'green' ;
      const COLOR_BLUE = 'blue' ;
      const COLOR_RED = 'red';

      const MANUFACTURE_TESLA = 'Tesla';
      const MANUFACTURE_TOYOTA = 'Toyota';
      const MANUFACTURE_CHEVROLET = 'Chevrolet';
      const MANUFACTURE_FORD = 'Ford';  

      public function __construct(string $manufacture, string $color = 'white', int $year = NULL, )
      {
         $this->fullCar['MANUFACTURE'] = $manufacture;
         $this->fullCar['COLOR'] = $color;

         if ($year) {
            $this->fullCar['YEAR'] = $year;
         }
      }
   }

   $car = new Car(Car::MANUFACTURE_FORD, Car::COLOR_BLUE);
   print_r($car);
   $car1 = new Car(Car::MANUFACTURE_CHEVROLET, Car::COLOR_RED, Car::YEAR_LAST);
   print_r($car1);

 ?>