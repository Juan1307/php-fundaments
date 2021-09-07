<?php declare(strict_types = 1);
   
/*   interface firtInterface 
   {
      public const CHAIN_CHAR = 'encadenamiento de letras';
      public function method() : ?string;
      public function method1() : int;
   }  
*/
   interface secondInterface
   {
      public function attribute() : string|int;
   }  

   interface thirdInterface{

      public function character(string $val) : array;
   }

   interface mixedInterface extends secondInterface, thirdInterface {
      // we are need set arguments ans types in magic functions
      public function __invoke($args);
      public function __construct(string $name);
   }

   abstract class AbstractClass implements mixedInterface
   {
      // only abstract
      private int $SUB_CHAIN_CHAR = 1223;
      private string $name;
      protected const CAR_LIST = ['CHEVROLET','NISSAN','FORD'];

      protected function getChainChar() : int {
         return $this->SUB_CHAIN_CHAR;
      }

      public function __construct(string $name = 'Default Robot'){
         $this->name = $name;
      }

      protected function getName() : string {
         return $this->name;
      }
   }

   class Father extends AbstractClass
   {

      public string|array $skills;

      public function __invoke($args) {
         $this->skills = $args;
      }

      public static function getConstant() : array {
         return parent::CAR_LIST;
      }
      // from second and third 
      public function character(string $val = 'Developer') : array
      {
         return [ 'position' => $val, 'value' => 22222 ];
      }

      public function attribute() : string|int {
         return 'Hey I am '. parent::getName();
      }

      // id function only father
      public function calChainChar() : float {
         return parent::getChainChar() ** 3;         
      }
   }

   $f = new Father();
   var_dump($f(['magic','resistence','flying']));
   var_dump('MY SKILLS '. implode(', ',$f->skills).PHP_EOL);
   var_dump($f->calChainChar());
   var_dump($f->character());
   var_dump($f->attribute().PHP_EOL);
   var_dump($f::getConstant());

?>