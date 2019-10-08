<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.dashboard');
    }

    public function addInventory(){
        return view('pages.addInventory');
    }

    public function viewInventory(){
        return view('pages.addInventory');
    }

}
