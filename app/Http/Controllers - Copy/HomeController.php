<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function dashboard()
   {
   	return view('dashboard');
   	

   }
   public function dashboard2()
   {
   	return view('dashboard2');
   	

   }
   public function dashboard3()
   {
   	return view('dashboard3');
   	

   }

}
