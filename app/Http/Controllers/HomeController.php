<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Feeds;

class HomeController extends Controller
{
  public function index()
  {
      return view('home.index');
  }
}