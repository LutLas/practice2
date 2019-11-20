<?php  

/*require 'functions.php';*/


	/*$router -> define ([

		'' => 'controllers/index.php',

		'home' => 'controllers/index.php',

		'docs' => 'controllers/docs.php',

		'info' => 'controllers/info.php',

		'names' => 'controllers/add-name.php'

		

	]);*/


$router -> get('', 'PagesController@home');

$router -> get('home', 'PagesController@home');

$router -> get('docs', 'PagesController@docs');

$router -> get('info', 'PagesController@info');

$router -> post('names', 'UsersControl@store');

$router -> get('user', 'PagesController@user');

$router -> post('user', 'controllers/@store');


/*dd($router -> routes);*/

?>