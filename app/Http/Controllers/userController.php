<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function index(){
        return view('pages.home');
    }
    public function login(){
        return view('pages.loginPages');
    }
    public function dataTable(){
        return view('pages.dataTables');
    }
}
