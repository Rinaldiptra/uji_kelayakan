<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\dp;
use App\inventaris;

class dpController extends Controller
{
    public function create()
    {
         $inv=inventaris::all();
         return view('dp.create',compact('inv'));
     }
     public function store(Request $request)
     {
         $id_dp = $request->id_dp;
         $di_inventaris= $request->id_inventaris;
         $jumlah = $request->jumlah;
         
         dp::create([
             'id_dp'=>$id_dp,
             'id_inventaris'=>$di_inventaris,
             'jumlah'=>$jumlah,
             
         ]);
         return redirect('/dp');  	
     }
      public function delete($id)
     {
         $dp = dp::where('id',$id);
         $dp->delete();
 
         return redirect('/dp');
     }
      public function edit($id)
     {
        $inv=inventaris::all();
         $dp = dp::all();
         $data = dp::where('id',$id)->first();
         return view('dp/edit',compact('data','inv'));
     }
 
 
      public function update(Request $request,$id)
     {
         $data= dp::where('id',$id);
         $id_dp=$request->id_dp;
         $id_inventaris=$request->id_inventaris;
         $jumlah=$request->jumlah;
         
         
         $dp->update([
             'id_dp' => $id_dp,
             'id_inventaris' => $di_inventaris,
             'jumlah' => $jumlah,
            
         ]);
         return redirect('/jdp');
     }  
}
