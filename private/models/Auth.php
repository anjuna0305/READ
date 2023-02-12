<?php

/**
 * authentication
 */
class Auth 
{
	
	public static function authenticate($row)
	{
		// code...
		$_SESSION['USER'] = $row;
	}

	public static function logout()
	{
		// code...
		if(isset($_SESSION['USER']))
		{
			unset($_SESSION['USER']);
		}
	}

	public static function logged_in()
	{
		// code...
		if(isset($_SESSION['USER']))
		{
			return true;
		}

		return false;
	}

	public static function user()
	{
		if(isset($_SESSION['USER']))
		{
			return $_SESSION['USER']->firstname;
		}

		return false;
	}

	public static function __callStatic($method,$params)
	{
		$prop = strtolower(str_replace("get","",$method));

		if(isset($_SESSION['USER']->$prop))
		{
			return $_SESSION['USER']->$prop;
		}

		return 'Unknown';
	}

	public static function isuser($usertype){
        if (Auth::logged_in()) {
            if (Auth::getusertype()==$usertype) {
                // echo ("called");
                return true;
            } else {
                return false;
            }
        }
        return false;
    }
}