<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriGaleri;

class KategoriGaleriController extends Controller
{
	  public function index()
    {
     $kategori_galeri=KategoriGaleri::all();
        
        return view('kategori_galeri.index',compact('kategori_galeri'));
     }
     public function show($id)
   	{
   		$kategori_galeri=KategoriGaleri::find($id);

   		return view('kategori_galeri.show',compact('kategori_galeri'));
   	} 
     public function create() {
    
      return view('kategori_galeri.create');
    }
    public function store(Request $request) {
        $input=$request->all();

        KategoriGaleri::create($input);

        return redirect(route('kategori_galeri.index'));
    }
}
