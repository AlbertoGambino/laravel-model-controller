<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

class TestController extends Controller
{
    public function home(){

        $movie = Movie::all();

        return view('pages.home', compact('movie'));
    }

    public function movie($id){

        $film = Movie::findorFail($id);

        return view('pages.element',compact('film'));
    }
}
