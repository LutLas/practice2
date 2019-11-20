<?php 

$greeting = 'Hello, ';

$user = $_GET['user'];

$greet = $greeting.$user;

$parcel = [

'owner'   	   		=> 'muyoba',
'expected delivery' => 'tomorrow',
'type'   			=> 'small parcel',
'delivery address'  => 'not listed',
'delivered' 	  	=> false,
'currier' 	   		=> 'deliver Las'
	   

];



require 'index.view.php';

 ?>