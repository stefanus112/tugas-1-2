<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriArtikel;
class KategoriArtikelController extends Controller
{
    public function index()
    {
        $kategori_artikel=KategoriArtikel::all();
        
        return view('kategori_artikel.index',compact('kategori_artikel'));
    }
   	public function show($id)
   	{
   		$kategori_artikel=KategoriArtikel::find($id);

   		return view('kategori_artikel.show',compact('kategori_artikel'));
   	} 
   	public function create()
   	{
   		return view('kategori_artikel.create');
    }
    public function store(Request $request) {
        $input=$request->all();

        KategoriArtikel::create($input);

        return redirect(route('kategori_artikel.index'));
    }
}
