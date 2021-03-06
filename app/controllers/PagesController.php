<?php  

namespace App\Controllers;

use App\Core\App;

class PagesController
{
	
	public function home()
	{
		//Receive the request.

		//Delegate.

		//Return a response.

		$greeting = 'Hello, ';

		// $user = $_GET['user'];

		$user = 'PotK Sed';

		$greet = $greeting.$user;



		/*require 'functions.php';*/
		/*require 'Parcel.php';*/




		$parcel = App::get('database') -> selectAll('parcels'/*, 'Parcel'*/);




		/*dd($parcel);*/
		/*require 'index.view.php';*/
		return view('index',compact('parcel','greet'));

	}


	public function docs()
	{
		//Receive the request.

		//Delegate.

		//Return a response.
		/*require 'docs.view.php';*/
		return view('docs');
	}


	public function info()
	{
		//Receive the request.

		//Delegate.

		//Return a response.

		/*require 'Names.php';*/

		$user = App::get('database') -> selectAll('user'/*, 'Names'*/);

		/*require 'info.view.php';*/
		return view('info', compact('user'));
	}


	public function auth()
	{


if ( !isset($_POST['username'], $_POST['password']) ) {
	// Could not get the data that should have been sent.
	die ('Please fill both the username and password field!');
}

// Prepare our SQL, preparing the SQL statement will prevent SQL injection.
if ($stmt = App::get('database')->prepare('SELECT id, password FROM accounts WHERE username = ?')) {
	// Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	// Store the result so we can check if the account exists in the database.
	$stmt->store_result();
}
		
	if ($stmt->num_rows > 0) {
	$stmt->bind_result($id, $password);
	$stmt->fetch();
	// Account exists, now we verify the password.
	// Note: remember to use password_hash in your registration file to store the hashed passwords.
	if (password_verify($_POST['password'], $password)) {
		// Verification success! User has loggedin!
		// Create sessions so we know the user is logged in, they basically act like cookies but remember the data on the server.
		session_regenerate_id();
		$_SESSION['loggedin'] = TRUE;
		$_SESSION['name'] = $_POST['username'];
		$_SESSION['id'] = $id;
		echo 'Welcome ' . $_SESSION['name'] . '!';
	} else {
		echo 'Incorrect password!';
	}
} else {
	echo 'Incorrect username!';
}
$stmt->close();
return view('home')
	// header('Location: /info');
	
		
	




}


?>