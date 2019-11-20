<?php 

require 'vendor/autoload.php';
$query = require 'core/bootstrap.php';


use App\Core\{Router, Request};
/*require 'functions.php';
dd($app);*/

// $router = new Router;

// require 'routes.php';



// require $router -> direct($uri);

Router::load('app/routes.php') -> direct (Request::uri(), Request::method());

?>