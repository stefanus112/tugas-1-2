<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;
use App\KategoriBerita;
class BeritaController extends Controller
{
    public function index(){
        
        $Berita=Berita::all(); 

        return view ('Berita.index',compact('Berita'));
        //return view ('berita.index'->with('data',$listBerita);
    }

    public function show($id) {

        //$Berita=Berita::where('id',$id)->first();
        $Berita=Berita::find($id);

        if (empty($Berita)){
            return redirect(route ('Berita.index'));
        }

        return view ('Berita.show', compact('Berita'));
        
    }

    public function create(){

        $KategoriBerita=KategoriBerita::pluck('nama','id');
        
        return view('Berita.create', compact('KategoriBerita'));
    }

    public function store(Request $request){

        $input= $request->all();

        Berita::create($input);

        return redirect(route('Berita.index'));
    }

    public function edit($id) {
        $Berita = Berita::find($id);
        $KategoriBerita=KategoriBerita::pluck('nama','id');

        return view('Berita.edit', compact('Berita','KategoriBerita'));
    }

    public function update($id,Request $request){
      $Berita=Berita::find($id);
      $input=$request->all();
  
      if(empty($listBerita)) {
        return redirect(route('Berita.index'));
      }

      $Berita->update($input);
      return redirect(route('Berita.index'));
    }

    public function destroy($id){
        $Berita=Berita::find($id);

        if (empty($Berita)){
            return redirect(route ('Berita.index'));
        }

        $Berita->delete();
        return redirect(route('Berita.index'));
    }

    public function trash(){
        
        $Berita=Berita::onlyTrashed()
                            ->WhereNotNull('deleted_at')
                            ->get();

        return view ('Berita.index',compact('Berita'));
        //return view ('berita.index'->with('data',$listBerita);
    }
}