<?php

class InstallDB
{

	private $connect;

	private $dir    = '../app/config/tables/';

	public function __construct($connect)
	{
		$this->connect = $connect;
	}


	public function run() 
	{
		$files = scandir($this->dir);

		foreach ($files as $filename)
		{
			if ($filename!= '.' && $filename!= '..')
			{

				$tables['columns'] = require $this->dir . $filename;

				$tablename = basename($filename, ".php");

				$this->connect->createTable("$tablename", null, $tables);
				
			}
			
		}
	}

}