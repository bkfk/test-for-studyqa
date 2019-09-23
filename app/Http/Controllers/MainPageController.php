<?php

namespace App\Http\Controllers;

use App\Section;
use Illuminate\Http\Request;

class MainPageController extends Controller
{
    public function index()
    {
      return view('front.main', ['sections' => Section::whereNull('feast_id')->get()]);
    }

}
