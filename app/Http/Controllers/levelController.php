<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\level;
class levelController extends Controller
{
    public function create()
    {
         return view('level.create');
     }
     public function store(Request $request)
     {
         $id_level = $request->id_level;
         $nama_level= $request->nama_level;
         
         
         level::create([
             'id_level'=>$id_level,
             'nama_level'=>$nama_level,
             
             
         ]);
         return redirect('/level');  	
     }
      public function delete($id)
     {
         $level = level::where('id',$id);
         $level->delete();
 
         return redirect('/level');
     }
      public function edit($id)
     {
         $level = level::all();
         $data = level::where('id',$id)->first();
         return view('level/edit',['datalevel'=>$data],['datalevel'=>$data]);
     }
 
 
      public function update(Request $request,$id)
     {
         $data= level::where('id',$id);
         $id_level=$request->id_level;
         $nama_level=$request->nama_level;

         $data->update([
             'id_level' => $id_level,
             'nama_level' => $nama_level,
            
            
         ]);
         return redirect('/level');
     }
}
