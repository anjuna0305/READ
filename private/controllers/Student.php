<?php

/**
 * student controller
 */
class Student extends Controller
{
	
	function index()
	{
		// code...
		echo $this->view('student');
	}
}