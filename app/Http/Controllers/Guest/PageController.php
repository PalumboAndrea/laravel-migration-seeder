<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;

class PageController extends Controller
{
    public function index(){
        $trains = Train::limit(21)->get();
        return view('home', [ 'trains' => $trains]);
    }
}
