<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		//return view('welcome_message');
		
		echo view('superuser/header');
		echo view('superuser/leftPanel');
		echo view('superuser/rightPanel');
		echo view('superuser/widget');
		echo view('superuser/traffic');
		echo view('superuser/order');
		echo view('superuser/todolivechat');
		echo view('superuser/calender');
		echo view('superuser/footer');
	}

}
