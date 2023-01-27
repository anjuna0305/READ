<?php

/**
 * home controller
 */
class Home extends Controller
{

	function index()
	{
		$errors=array();
		// code...
		if(!Auth::logged_in())
		{
			$this->redirect('login');
		}
		else
		{
			print_r($_SESSION['USER']->username);
			echo "maramu";
		}

		// $user = new user;
		// // $data=$user->find_all();
		// $arr['firstName'] = 'pomna';
		// $arr['lastName'] = 'pamkaya';
		// $arr['userIndex'] = 5566222;
		// // $arr['email'] = 'siri@gmail.com';
		// // $arr['nic'] = 112233655;
		// // $arr['contact'] = '785566998';
		// // $arr['district'] = 453132;
		// // $arr['town'] = '13132';
		// // $arr['password'] = 'kkpp';

		// // $this->view('home', ['rows' => $data]);
		// $user->delete(780934714618081138);
		// $data = $user->find_all();
		$this->view('home', ['errors' => $errors]);
	}
}
