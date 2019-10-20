<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengumuman;
use App\KategoriPengumuman;

class PengumumanController extends Controller
{
    public function index(){
        
        $Pengumuman=Pengumuman::all(); 

        return view ('Pengumuman.index',compact('Pengumuman'));
        //return view ('pengumuman.index'->with('data',$listPengumuman);
    }

    public function show($id) {

        //$Pengumuman=Pengumuman::where('id',$id)->first();
        $Pengumuman=Pengumuman::find($id);

        return view ('Pengumuman.show', compact('Pengumuman'));
        
    }

    public function create(){

        $KategoriPengumuman=KategoriPengumuman::pluck('nama','id');
        
        return view('Pengumuman.create', compact('KategoriPengumuman'));
    }

    public function store(Request $request){

        $input= $request->all();

        Pengumuman::create($input);

        return redirect(route('Pengumuman.index'));
    }

    public function edit($id) {
        $Pengumuman = Pengumuman::find($id);
        $KategoriPengumuman=KategoriPengumuman::pluck('nama','id');

        return view('Pengumuman.edit', compact('Pengumuman','KategoriPengumuman'));
    }

    public function update($id,Request $request){
      $Pengumuman=Pengumuman::find($id);
      $input=$request->all();
  
      if(empty($Pengumuman)) {
        return redirect(route('Pengumuman.index'));
      }

      $Pengumuman->update($input);
      return redirect(route('Pengumuman.index'));
    }

    public function destroy($id){
        $Pengumuman=Pengumuman::find($id);

        if (empty($Pengumuman)){
            return redirect(route ('Pengumuman.index'));
        }

        $Pengumuman->delete();
        return redirect(route('Pengumuman.index'));
    }

    public function trash(){
        
        $Pengumuman=Pengumuman::onlyTrashed()
                            ->WhereNotNull('deleted_at')
                            ->get();

        return view ('Pengumuman.index',compact('Pengumuman'));
        //return view ('pengumuman.index'->with('data',$listPengumuman);
    }
}
