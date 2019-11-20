<?php  

namespace App\Core;

	Class App
	{


		protected static $registry = [];


		public static function bind($key, $value)
		{
			# code...
			static ::$registry[$key] = $value;

		}



		public static function get($key)
		{
			# code...
			if (! array_key_exists($key, static::$registry)) {
				# code...
				throw new Exception("No {key} is bound in the container.");
				
			}
			return static::$registry[$key];

		}






	}



?>