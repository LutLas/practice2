<?php

/*require 'functions.php';*/

class QueryBuilder
{


	protected $pdo;

	public function __construct($pdo)
	{

		$this -> pdo = $pdo;

	}


	
	public function selectAll($table/*, $intoClass*/)
	{
		
		$statment = $this -> pdo -> prepare("select * from {$table}");

		$statment -> execute();

		return $statment -> fetchAll(PDO::FETCH_CLASS/*, $intoClass*/);

	}


	public function insert($table, $parameters)
	{
		$sql = sprintf(
			'insert into %s (%s) values (%s)',
			
			$table,

			implode(', ', array_keys($parameters)),

			':'.implode(', :', array_keys($parameters))

		);

		try {
				
			$statment = $this -> pdo -> prepare($sql);

			$statment -> execute($parameters);

			} catch (Exception $e) {

				die('We have a problem, something went wrong.');	
			}		

		/*array_map(function ($param)
		{

			return ":{$param}"

		}, array_keys)*/

		/*dd($sql);*/
	}

}




?>