<?php

class Cashier extends Model
{
	protected $allowedColumns = [
		'bill_no',
    	'deliver_date',
    	'price',
    	'advanced',
    	'contact_no',
    	'book',
    	'page',
	];

	public function insetItems($data){
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

		$keys = array_keys($data);
		$columns = implode(',', $keys);
		$values = implode(',:', $keys);

		$query = "insert into orderitems ($columns) values (:$values)";
		echo $query;

		return $this->query($query, $data);
	}

	public function insetOrderItems($data){
		$bill_no=$data['bill_no'];

		if(property_exists($this, 'allowedColumns'))
		{
			foreach($data as $key => $column)
			{
				if(in_array($key, $this->allowedColumns))
				{
					unset($data[$key]);
				}
			}
		}

		foreach($data as $key => $column)
			{
				if($data[$key]==0)
				{
					unset($data[$key]);
				}
			}

		foreach($data as $key => $column)
			{
				if($data[$key]=="")
				{
					unset($data[$key]);
				}
			}

		$valueStr = "";

		for($x=1; $x<=3; $x++)
		{
			if(array_key_exists("item$x", $data) && array_key_exists("item$x"."_count", $data))
				{
					$valueStr .= "($bill_no,'" . $data["item$x"] . "',".$data["item$x"."_count"]."),";
				}
		}

		$valueStr = trim($valueStr,',');
		
		$columns = "bill_no,item_code,count";
		
		if ($valueStr != "") 
		{
			$query = "insert into order_items ($columns) values $valueStr";
			return $this->query($query);
			// echo ($query);
		}
		else
		{
			echo "string";
		}

		

		

		
	}
}
