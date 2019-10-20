<?php

namespace App\Http\Controllers;

use App\Galeri;
use Illuminate\Http\Request;
use App\KategoriGaleri;

class GaleriController extends Controller
{
    public function index(){
      
      $Galeri=Galeri::all(); 

      return view ('Galeri.index',compact('Galeri'));
      //return view ('artikel.index'->with('data',$listArtikel);
    }

    public function show($id) {

        //$Artikel=Artikel::where('id',$id)->first();
        $Galeri=Galeri::find($id);


        if (empty($Galeri)){
            return redirect(route ('Galeri.index'));
        }

        return view ('Galeri.show', compact('Galeri'));
        
    }

    public function create(){

        $KategoriGaleri=KategoriGaleri::pluck('nama','id');
        
        return view('Galeri.create', compact('KategoriGaleri'));
    }

    public function store(Request $request){

        $input= $request->all();

        Galeri::create($input);

        return redirect(route('Galeri.index'));
    }

     public function edit($id) {
        $Galeri = Galeri::find($id);
        $KategoriGaleri=KategoriGaleri::pluck('nama','id');

        return view('Galeri.edit', compact('Galeri','KategoriGaleri'));
    }

    public function update($id,Request $request){
      $Galeri=Galeri::find($id);
      $input=$request->all();
  
      if(empty($Galeri)) {
        return redirect(route('Galeri.index'));
      }

      $Galeri->update($input);
      return redirect(route('Galeri.index'));
    }

    public function destroy($id){
        $Galeri=Galeri::find($id);

        if (empty($Galeri)){
            return redirect(route ('Galeri.index'));
        }

        $Galeri->delete();
        return redirect(route('Galeri.index'));
    }
    
    public function trash(){
        
        $Galeri=Galeri::onlyTrashed()
                            ->WhereNotNull('deleted_at')
                            ->get();

        return view ('Galeri.index',compact('Galeri'));
        //return view ('artikel.index'->with('data',$listArtikel);
    }
}