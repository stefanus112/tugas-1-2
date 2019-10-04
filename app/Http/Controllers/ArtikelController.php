<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;
class ArtikelController extends Controller
{
      public function index()
    {
        $Artikel=Artikel::all();
        
        return view('Artikel.index',compact('Artikel'));
    }
}
