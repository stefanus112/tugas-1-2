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
    public function show($id)
   	{
   		$Galeri=Galeri::find($id);

   		return view('Galeri.show',compact('Galeri'));
   	} 
   	public function create()
   	{
      $Galeri=Galeri::pluck('nama','id');

   		return view('Galeri.create', compact('Galeri'));
    }
    public function store(Request $request) {
        $input=$request->all();

        Galeri::create($input);

        return redirect(route('Galeri.index'));
    }
}
