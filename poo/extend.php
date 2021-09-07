<?php declare(strict_types = 1); 

   /**
    * Parent class
    */
   class Person
   {
      private string $state = 'Father Class';

      public string $firstname;
      public string $surname;

      public function __construct(string $firstname, string $surname) {
         $this->firstname = $firstname;
         $this->surname = $surname;
      }

      public function getState() : string {
         return $this->state;
      }
   }

   /**
    * Child Class
    */
   class Teacher extends Person
   {
      private string $state = 'Teacher Class';
      protected int $numdoc;

      public function __construct(string $firstname, string $surname, int $numdoc) {
         parent::__construct($firstname, $surname);
         $this->numdoc = $numdoc;
      }
   }

   class Student extends Person
   {
      private string $state = 'Student Class';
      protected int $cedula;

      public function __construct(string $firstname, string $surname, int $cedula) {
         parent::__construct($firstname, $surname);
         $this->cedula = $cedula;
      }
   }
   // $this->
   $child = new Teacher('Alfaro','Crami Doofi', 123123);
   $student = new Student('MArie','Curie APp', 111111111);

   var_dump($child);
   var_dump($student);

?>