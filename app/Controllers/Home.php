<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data['title'] = "Home";
		$data['css'] = "css/home.css";
		session()->set($data);


		return view('home',);
	}
}
