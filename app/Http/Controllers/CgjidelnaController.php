<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CgjidelnaController extends Controller
{
    public function index() {
        return view('app/home');
    }
    public function food_info() {
        return view('app/view_food');
    }
    public function add_review() {
        return view('app/create_review');
    }
    public function add_food() {
        return view('app/create_food');
    }
}
