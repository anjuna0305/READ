<?php
/**
 * login controller
 */
class Login extends Controller
{
	
	function index()
	{
		// code...
		$errors = array();

		if(count($_POST) > 0)
 		{
 			$user = new User();
 			if($row = $user->where('username',$_POST['username']))
 			{
 				$row = $row[0];
 				if($_POST['password']==$row->password)
 				{
 					Auth::authenticate($row);

 					if($row->usertype=='cashier'){
 						$this->redirect('cashiers');
 					}
 					elseif($row->usertype=='admin'){
 					}
 				}
 			}
  			
  			$errors[] = "Wrong username or password";

 		}

		$this->view('login',[
			'errors'=>$errors,
		]);
	}	
}
