<?php

/**
 * cashier controller
 */
class Cashiers extends Controller
{

	function index()
	{

		$errors=array();
		// code...
		if(!Auth::logged_in())
		{
			$this->redirect('login');
		}
		
		$user=new Cashiers();
		$errors=array();

		// if(count($_POST)==1)
		// {
		// 	$this->searchorder();
		// }
		// else if (count($_POST)==13)
		// {
		// 	$this->addorder();
		// }
		$this->view('cashier', ['errors' => $errors]);
	}

	public function addorder(){
		// code..
		// if(!Auth::logged_in())
		// {
		// 	$this->redirect('login');
		// }
		$user=new Cashier();

		// $items=array();

		// $user->insertInto($_POST,"orders");
		$user->insetOrderItems($_POST);

		$errors=array();

		// $errors['pakaya']="ballo maramu malli";
		$this->view('cashier', ['errors' => $errors]);
	}

	public function searchorder(){
		if(!Auth::logged_in())
		{
			$this->redirect('login');
		}
		$user=new Cashier();
		$errors=array();

		$this->view('cashier', ['errors' => $errors]);
	}
}
