<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengumuman;
class PengumumanController extends Controller
{
     public function index()
    {
        $Pengumuman=Pengumuman::all();
        
        return view('Pengumuman.index',compact('Pengumuman'));
    }
    public function show($id)
   	{
   		$Pengumuman=Pengumuman::find($id);

   		return view('Pengumuman.show',compact('Pengumuman'));
   	} 
   	public function create()
   	{
      $Pengumuman=Pengumuman::pluck('judul','id');

   		return view('Pengumuman.create', compact('Pengumuman'));
    }
    public function store(Request $request) {
        $input=$request->all();

        Pengumuman::create($input);

        return redirect(route('Pengumuman.index'));
    }
}
