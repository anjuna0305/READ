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
		$user=new Cashier();

		$user->insertInto($_POST,"orders");
		$user->insetOrderItems($_POST);

		$errors=array();

		$this->view('cashier', ['errors' => $errors]);
	}

	public function searchorder(){
		if(!Auth::logged_in())
		{
			$this->redirect('login');
		}
		$user=new Cashier();

		$orders=array();
		$order_items=array();

		if(count($_POST)>0 && $_POST['search_term'] != '')
		{
			$orders= $user->searchFromTable('orders',$_POST);
			$order_items= $user->searchFromTable('order_items',$_POST);
		}

		$errors=array();
		unset($_POST);

	
		return $this->view('cashier', [
			'orders' => $orders,
			'order_items' => $order_items,
			]);
		
	}
}
