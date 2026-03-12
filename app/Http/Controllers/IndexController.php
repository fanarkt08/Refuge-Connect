<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;

class IndexController extends Controller
{
    public function index()
    {
        $animals = Animal::all();
        if ($animals){
            return view('welcome', ['animals' => $animals]);
        }
        return view('welcome', ['animals' => []]);
    }
}
