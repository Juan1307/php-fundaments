<?php declare(strict_types = 1);

   require_once 'DbInterface.php';
   require_once 'Mysql.php';
   require_once 'Postgre.php';
   require_once 'SqlServer.php';

   /**
    * Class Application
    */
   class Application
   {
      public $conn;

      public function __construct(DbInterface $db) {
         $this->conn = $db;
      }
   }

   $app = new Application( 
      // new Postgre()
      new SqlServer()
      // new Mysql(),

   );

   $app->conn->getData();
   $app->conn->postData(true, []);
   $app->conn->deleteData(1);
?>