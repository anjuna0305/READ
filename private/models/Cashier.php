<?php

use LDAP\Result;

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
		'added_user',
	];

	public function insetOrderItems($data)
	{
		$user = new Cashiers();

		if (!$bill_no = $data['bill_no']) {
			$user->redirect('cashiers');
		}

		$valueStr = "";

		// crating value string
		for ($x = 1; $x <= 3; $x++) {
			if (array_key_exists("item$x", $data) && array_key_exists("item$x" . "_count", $data)) {
				if ($data["item$x"] != "" && $data["item$x" . "_count"] != 0)
					$valueStr .= "($bill_no,'" . $data["item$x"] . "'," . $data["item$x" . "_count"] . "),";
			}
		}

		$valueStr = trim($valueStr, ',');

		$columns = "bill_no,item_code,count";

		if ($valueStr != "") {
			$query = "insert into order_items ($columns) values $valueStr";
			$this->query($query);
			return $user->redirect('cashiers');
		} else {
			echo "there is a error";
		}
	}

	public function searchFromTable($tableName, $data)
	{
		$user = new Cashiers();

		$this->table = $tableName;
		$search_results = $this->where('bill_no', $data['search_term']);
		return $search_results;
	}

	public function searchOrderDetails($data)
	{
		$user = new Cashiers();

		$this->table = $orders;
		$search_results = $this->where('bill_no', $data['search_term']);
		return $search_results;
	}

	public function bill_exists($bill_no)
	{
		$query = "SELECT * FROM orders WHERE bill_no = '$bill_no'";
		$result = $this->query($query);

		if ($result == false) {
			return false;
		} else {
			return true;
		}
	}
}
