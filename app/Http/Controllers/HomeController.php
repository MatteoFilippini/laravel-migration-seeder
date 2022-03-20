<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Train;

class HomeController extends Controller
{
    public function index()
    {
        $trains = Train::all();
        return view('welcome', compact('trains'));
    }
}
