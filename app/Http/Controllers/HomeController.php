<?php

namespace App\Http\Controllers;

use App\Models\Javascript;
use App\Models\Laravel;
use App\Models\Ruby;
use App\Models\Java;
use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    //
    public function index()
    {

        $laravels = Laravel::latest()->paginate(4);
        $javascripts = Javascript::latest()->paginate(4);
        $javas = Java::latest()->paginate(4);
        $rubys = Ruby::latest()->paginate(4);
        return view('user.index', compact('javas', 'rubys', 'laravels', 'javascripts'));
    }
}
