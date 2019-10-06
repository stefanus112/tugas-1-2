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
    public function show($id)
   	{
   		$Artikel=Artikel::find($id);

   		return view('Artikel.show',compact('Artikel'));
   	} 
   	public function create()
   	{
      $Artikel=Artikel::pluck('judul','id');

   		return view('Artikel.create', compact('Artikel'));
    }
    public function store(Request $request) {
        $input=$request->all();

        Artikel::create($input);

        return redirect(route('Artikel.index'));
    }
}
