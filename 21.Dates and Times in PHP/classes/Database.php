<?php

/**
* Database
*
* A connection to the Database
**/

class Database
	{
		/**
		* Get the Database connection
		*
		* @return PDO object Connection to the database server
		**/
		public function getConn()
		{
			$db_host = "localhost";
			$db_name = "cms";
			$db_user = "cms_www";
			$db_pass = "2vJ651YkqC4gOqhr";

			$dsn = 'mysql:host=' . $db_host . ';dbname=' . $db_name . ';charset=utf8';

			try
			{
				$db = new PDO($dsn, $db_user, $db_pass);
				$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				return $db;
			} catch(PDOException $e)
			{
				echo $e->getMessage();
				exit;
			}
		}
	}
