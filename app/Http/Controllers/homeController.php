<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index()
    {
        $name= 'John';
        $fruits= array('apple', 'orange', 'banana');
        $currentFruit = '';
        foreach ($fruits as $fruit) {
            echo $fruit;
        }
//        return view('home');
    }

}
