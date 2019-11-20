<?php

namespace App\Controllers;

use App\Core\App;

/*require 'functions.php';*/
class UsersControl
{
	public function store()
	{
		
		App::get('database') -> insert('user', [

		'name' => $_POST['name']

	]);



	// header('Location: /info');
	return redirect('info');

		
	}
}


/*dd($_SERVER);*/
/*dd($_REQUEST);*/
/*dd($_GET['name']);*/
/*dd('You typed '. $_POST['name']);*/
?>