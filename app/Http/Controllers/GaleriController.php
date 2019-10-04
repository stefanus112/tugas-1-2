<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Galeri;
class GaleriController extends Controller
{
    public function index()
    {
        $Galeri=Galeri::all();
        
        return view('Galeri.index',compact('Galeri'));
    }
}
