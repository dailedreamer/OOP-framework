<?php

require 'DREAMER_Db.php';
class DREAMER_Model
{

	protected $database_array;
	protected $db;

	public function __construct($database_array)
	{
		$this->database_array = $database_array;
		$this->db = new DREAMER_Db($this->database_array);

		foreach($this->database_array as $key => $row)
		{
			$this->create_property($key);
			$this->{$key} = & $this->db->{$key};
		}
	}

	public function create_property($name)
	{
		$this->{$name} = "";
	}
}