<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function index()
  {
    $data = [
      'title'=> 'Homepage Boolean',
      'description'=>'Questa è la prima pagina'
    ];

    return view('home', $data);
  }
}
