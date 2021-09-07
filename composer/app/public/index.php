<?php declare(strict_types = 1);
 
   // init application
   require __DIR__ . '/../../vendor/autoload.php';
   use App\Config\Animal;

   $app = new Animal('asd');

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Composer</title>
</head>
<body>
   <h1>hola desde composer</h1>
</body>
</html>