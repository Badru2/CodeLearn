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
    public function cari(Request $request)
    {
        $keyword = $request->input('cari');

        // mengambil data dari table pegawai sesuai pencarian data
        $laravels = Laravel::where('title', 'like', "%" . $keyword . "%")->paginate(10);
        $javascripts = Javascript::where('title', 'like', "%" . $keyword . "%")->paginate(10);
        $javas = Java::where('title', 'like', "%" . $keyword . "%")->paginate(10);
        $rubys = Ruby::where('title', 'like', "%" . $keyword . "%")->paginate(10);


        // mengirim data pegawai ke view index
        return view('user.index', compact('laravels', 'javascripts', 'javas', 'rubys'));
    }
}
