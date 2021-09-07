<?php declare(strict_types = 1); 

   /**
    * Class for magic methods
    */
   class Person
   {
      public string $name = 'Joe';
      private int $phone = 1234;

      public function __construct()
      {
         echo 'contructor llamado'.PHP_EOL;
      }

      public function __destruct()
      {
         echo 'destructor llamado'.PHP_EOL;
      }
      // retorna una cadena 
      public function __toString()
      {
         return $this->name.$this->phone.PHP_EOL;
      }
   }

/*   $person = new Person();
   echo $person;
*/

   /**
    * Class for magic methods
    */
   class PersonA 
   {
      public float $salary = 12.233;
      private int $cedula = 12312313;
   
      public function __get(string $prop) : string 
      {
         if ($prop == 'money') {
            return $this->salary.' - '.$this->cedula;
         }
         return 'oops prop not found';
      }
   }

/*   $person1 = new PersonA();
   echo $person1->salars.PHP_EOL;
*/

   /**
    * Class for magic methods
    */
   class Car 
   {
      public int $year = 2021;
      public string $sponsor;
      const CAR_LIST = ['honda', 'ford', 'kraysler'];

      public function __set($prop, $val) : void
      {
         if (!in_array($val, self::CAR_LIST) and $prop === 'marca') {
            $this->sponsor = $val;
            return;
         }

         throw new Exception("Error to set sponsor", 1);

      }
   }

  /* $car = new Car();
   $car->marca = 'Toyota';
   echo $car->sponsor;*/

   /**
    * 
    */
   class Boos
   {
      public string $name = 'Alcantara';
      private bool $confidential = false;
      private static int $phone = 11223344;

      public function __call(string $func, array $args)
      {
         return match ($func) {
            'getIntroduction' => $args[0].$this->name.self::getPhone(),
            'getFamily' => $this->getParents($args[0]),
         };
      }

      public static function getPhone() : string {
         return ' number is : '.self::$phone;
      }

      public function getParents(array $arr) : string
      {
         return implode(', ', $arr);
      }
  
   }
   // ->
   /*$b = new Boos();

   var_dump($b->getPhone());
   var_dump($b->getFamily([123,312,3213]));
   var_dump($b->getIntroduction('hey iam cute'));
*/

   /**
    * invoke magic 
    */
   class Chief
   {
      public string $name;
      private int $phone = 12322;
      
      public function __invoke(string $str) 
      {
         echo 'call object chief as a function - '.$str;
      }

   }
/*   $c = new Chief();
   $c('hola mi pana');
   var_dump(is_callable($c));
*/

   /**
    *  serialize
    */
   class Ser
   {
      public string $name;
      private int $phone = 12322;
   }

/*   $s = new Ser();

   $set_ser = serialize($s);
   var_dump($set_ser);

   $unset_ser = unserialize($set_ser);
   var_dump($unset_ser);*/

   class sleep {
      public $resourceM;
      public $arrayM;

      public function __construct() {
         $this->resourceM = fopen("demo.txt", "w");
         $this->arrayM = array(1, 2, 3, 4); // Enter code here
      }

      public function __sleep() {
         return array('arrayM');
      }

      public function __wakeup() {
         $this->resourceM = fopen("demo.txt", "w");
      }
   }


$obj = new sleep();
$serializedStr = serialize($obj);
var_dump($obj);
var_dump($serializedStr);
var_dump(unserialize($serializedStr));
?>