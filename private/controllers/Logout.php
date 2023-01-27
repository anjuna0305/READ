<?php

/**
 * home controller
 */
class logout extends Controller
{

	function index()
	{
		Auth::logout();
		$this->redirect('login');
	}
}