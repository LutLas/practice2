<?php 

$greeting = 'Hello, ';

$user = $_GET['user'];

$greet = $greeting.$user;

$person = [

'name'   	   => 'Muyoba',
'age'    	   => '28',
'hair color'   => 'dirty brown',
'eye color'    => 'black',
'career' 	   => 'computer scientist',
'school' 	   => 'mulungushi university'
	   

];

die(var_dump($person));

require 'index.view.php';

 ?>