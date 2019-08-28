<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TinController extends Controller
{
    public function listtin(){
        return view("listtin");
   }   
}
