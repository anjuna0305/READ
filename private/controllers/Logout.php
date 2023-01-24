<?php

/**
 * home controller
 */
class logout extends Controller
{

	function index()
	{
		session_start();
		Auth::logout();
		$this->redirect('login');
	}
}