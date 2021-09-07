<?php declare(strict_types = 1);

   use function FastRoute\simpleDispatcher;
   use FastRoute\{ RouteCollector, Dispatcher};

   $dispatcher = simpleDispatcher(function (RouteCollector $r) {
      // global routes
      $r->get('/', 'get initial');
      $r->post('/query', 'ApiRoot/getQuery');
      $r->put('/login', 'put login con datos');
      $r->put('/school', 'put escuela con datos');

      // support initial
      $r->addGroup('/support', function (RouteCollector $r) {
         $r->addRoute('PUT', '/query', 'handler');
         $r->addRoute('PUT', '/school', 'handler');
         $r->addRoute('PUT', '/login', 'handler');
         // buf report
         $r->addRoute('PUT', '/trouble', 'handler');
      });

   });

   $http = $_SERVER['REQUEST_METHOD'];
   $uri = $_SERVER['REQUEST_URI'];
   // obtenemos la posicion de ? parseamos la ur/
   $uri = (false !== $pos = strpos($uri, '?')) ? substr($uri, 0, $pos) : rawurldecode($uri);
   $router = $dispatcher->dispatch($http, $uri);

   switch ($router[0]) {
      case Dispatcher::NOT_FOUND: 
         echo 'error 404'; 
      break;
      case Dispatcher::METHOD_NOT_ALLOWED: 
         echo 'error 405';
      break;
      case Dispatcher::FOUND: 
         $handler = $router[1];
         $vars = $router[2];        
      
            list($class, $method) = explode("/", $handler, 2);
            call_user_func_array(array(new $class, $method), $vars);
      break;
   };

?>