<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Page;

class PageController extends Controller
{
    public function index(){
        // we get the fruits function data from the Page.php model
        $fruits = Page::fruits();
        //return $fruits;
        return view('index', ['fruits' => $fruits]);
    }
}
