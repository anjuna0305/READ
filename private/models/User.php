<?php

/**
 * User model
 */
class User extends Model
{
	// protected $table = "areacoordinators";

	protected $allowedColumns = [
		'firstname',
		'lastname',
		'email',
		'password',
		'gender',
		'id',
	];

	protected $beforeInsert=[
		// 'make_user_id',
		'hash_password',

	];

	public function validate($DATA)
	{
		$this->errors = array();

		//check first name
		if (empty($DATA['firstname']) || !preg_match('/^[a-zA-Z]+$/', $DATA['firstname'])) {
			$this->errors[] = "Only letters are allowed in First name";
		}

		//check last name
		if (empty($DATA['lastname']) || !preg_match('/^[a-zA-Z]+$/', $DATA['lastname'])) {
			$this->errors[] = "Only letters are allowed in Last name";
		}

		//check gender
		$genders = ['male', 'female'];
		if (empty($DATA['gender']) || !in_array($DATA['gender'], $genders)) {
			$this->errors[] = "Gender not valid";
		}

		//check email
		if (empty($DATA['email']) || !filter_var($DATA['email'], FILTER_VALIDATE_EMAIL)) {
			$this->errors[] = "Email is not valid";
		}

		//check password
		if (empty($DATA['password']) || $DATA['password'] != $DATA['password2']) {
			$this->errors[] = "Passwords are not matched";
		}


		if (count($this->errors) == 0) {
			return true;
		}

		return false;
	}
}
