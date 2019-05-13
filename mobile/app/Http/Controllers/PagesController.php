<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    
    public function index()
    {

    	return view('pages/index');
    
    }

    public function store()
    {

    	return view('pages/store');
    
    }

    public function secondhand()
    {
    	return view('pages/secondhand');
    }

    
    public function welcome()
    {
    	return view('/welcome');
    }

    public function userprofile()
    {
    	return view('pages/userprofile');
    }

    public function editprofile()
    {
    	return view('pages/editprofile');
    }
    public function updateproduct()
    {
    	return view('pages/updateproduct');
    }

    public function additems()
    {
    	return view('pages/additems');
    }

 
    public function order()
    {
    	return view('pages/order');
    }


   public function producttype()
    {
        return view('pages/producttype');
    }



}
