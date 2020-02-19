<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;
use App\Song;

class AlbumController extends Controller
{
    public function index() 
    {
       
        $albums = Album::all();
        return view('album', compact('albums'));
    }
    public function show($id)
    {
        $album = Album::find($id);
        if (!$album) abort(404);
        return view('album', compact('album'));
    }
    
}
