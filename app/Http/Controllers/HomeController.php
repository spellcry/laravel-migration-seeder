<?php

namespace App\Http\Controllers;

use App\Train;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $trains = Train::where('cancellato', 0)->get();
        $trainsDeleted = Train::where('cancellato', 1)->get();
        return view('home', compact('trains', 'trainsDeleted'));
    }
}
