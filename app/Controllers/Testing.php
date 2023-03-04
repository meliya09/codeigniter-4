<?php

namespace App\Controllers;

class Testing extends BaseController
{
  public function index()
  {
    var_dump("testing");
    die();
    // return view('welcome_message');
  }
}
