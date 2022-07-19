<?php

namespace App\Http\Controllers\News;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function post()
    {
        return response()->json(['first_test' =>'ok'],404);
    }
}
