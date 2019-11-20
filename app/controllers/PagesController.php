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



}


?>