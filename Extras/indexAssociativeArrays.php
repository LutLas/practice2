<?php 

$greeting = 'Hello, ';

$user = $_GET['user'];

$greet = $greeting.$user;

$person = [

'name'   => 'Muyoba',
'age'    => '28',
'hair'   => 'dirty brown',
'eye'    => 'black',
'career' => 'computer scientist',
'school' => 'mulungushi university'


];

require 'index.view.php';

 ?>