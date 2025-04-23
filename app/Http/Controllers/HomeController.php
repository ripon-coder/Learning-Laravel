<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
      $data = "20";
      $data1 = (int) $data;
      $data2 = (boolean) $data;
      return gettype($data2);
    }
}

class DynamicController
{
    public function addNumbers($a, $b)
    {
        return $a + $b;
    }
}
