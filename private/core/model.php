<?php

/**
 * 
 */
class Model extends Database
{
	public $errors = array();

	public function __construct()
	{
		// code...
		if (!property_exists($this, 'table')) {
			$this->table = strtolower($this::class).'s'; //returns current instance' name
		}
	}

	public function where($column, $value)
	{
		$column = addsLashes($column);
		$query = "select * from $this->table where $column = :value";
		return $this->query($query, [':value' => $value]);
	}

	public function find_all()
	{
		$query = "select * from $this->table";
		return $this->query($query);
	}

	public function insert($data)
	{
		if(property_exists($this, 'allowedColumns'))
		{
			foreach($data as $key => $column)
			{
				if(!in_array($key, $this->allowedColumns))
				{
					unset($data[$key]);
				}
			}
		}

		print_r($data);


		if(property_exists($this, 'beforeInsert'))
		{
			foreach($this->beforeInsert as $func)
			{
				$data=$this->$func($data);
			}
		}
		echo "function called";

		$keys = array_keys($data);
		$columns = implode(',', $keys);
		$values = implode(',:', $keys);

		$query = "insert into $this->table ($columns) values (:$values)";
		echo $query;

		return $this->query($query, $data);
	}

	public function update($id, $data)
	{
		if(property_exists($this, 'allowedColumns'))
		{
			foreach($data as $key => $column)
			{
				if(!in_array($key, $this->allowedColumns))
				{
					unset($data[$key]);
				}
			}
		}
		
		$str = "";
		foreach ($data as $key => $value) {
			$str .= $key . '=:' . $key . ',';
		}

		$str = trim($str, ",");
		echo $str;

		$data['id'] = $id;

		$query = "update $this->table set $str where id = :id";
		return $this->query($query, $data);
	}

	public function delete($id)
	{
		$query = "delete from $this->table where id = :id";
		$data['id'] = $id;
		return $this->query($query, $data);
	}

	public function hash_password($data)
	{
		$data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
		return $data;
	}
}
