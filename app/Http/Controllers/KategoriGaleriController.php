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
     public function edit($id)
       {
        $kategori_galeri=KategoriGaleri::find($id);

        if (empty($kategori_galeri)){
            return redirect(route ('kategori_galeri.index'));
        }

        return view('kategori_galeri.edit',compact('kategori_galeri'));
    }
    public function update($id,Request $request){
      $kategori_galeri=KategoriGaleri::find($id);
      $input=$request->all();
  
      if(empty($kategori_galeri)) {
        return redirect(route('kategori_galeri.index'));
      }

      $kategori_galeri->update($input);
      return redirect(route('kategori_galeri.index'));
    }
    public function destroy($id){
        $kategori_galeri=KategoriGaleri::find($id);

        if (empty($kategori_galeri)){
            return redirect(route ('kategori_galeri.index'));
        }

        $kategori_galeri->delete();
        return redirect(route('kategori_galeri.index'));
    }
    public function trash(){
        
         $kategori_galeri=KategoriGaleri::onlyTrashed()
                            ->WhereNotNull('deleted_at')
                            ->get();

        return view ('kategori_galeri.index',compact('kategori_galeri'));
    }

}
