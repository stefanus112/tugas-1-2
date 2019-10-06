<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;
class BeritaController extends Controller
{
     public function index()
    {
        $Berita=Berita::all();
        
        return view('Berita.index',compact('Berita'));
   
    }
    	public function show($id)
   	{
   		$Berita=Berita::find($id);

   		return view('Berita.show',compact('Berita'));
   	} 
   	public function create()
   	{
      $Berita=Berita::pluck('judul','id');

   		return view('Berita.create', compact('Berita'));
    }
    public function store(Request $request) {
        $input=$request->all();

        Berita::create($input);

        return redirect(route('Berita.index'));
    }

}

