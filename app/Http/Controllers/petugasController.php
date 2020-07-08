<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\petugas;
class petugasContorller extends Controller
{
    public function create()
    {
         return view('petugas.create');
     }
     public function store(Request $request)
     {
         $id_petugas = $request->id_petugas;
         $username= $request->username;
         $password = $request->password;
         $nama_petugas = $request->nama_petugas;
         $id_level = $request->id_level;

         petugas::create([
             'id_petugas'=>$id_petugas,
             'username'=>$username,
             'password'=>$password,
             'nama_petugas'=>$nama_petugas,
             'id_level'=>$id_level,

             
         ]);
         return redirect('/petugas');  	
     }
      public function delete($id)
     {
         $petugas= petugas::where('id',$id);
         $petugas->delete();
 
         return redirect('/petugas');
     }
      public function edit($id)
     {
         $petugas = petugas::all();
         $data = petugas::where('id',$id)->first();
         return view('petugas/edit',['datapetugas'=>$data],['datapetugas'=>$data]);
     }
 
 
      public function update(Request $request,$id)
     {
         $data= petugas::where('id',$id);
         $id_petugas=$request->id_petugas;
         $username=$request->username;
         $password=$request->password;
         $nama_petugas=$request->nama_petugas;
         $id_level=$request->id_level;
         
         
         $data->update([
             'id_peminjaman' => $id_peminjaman,
             'username' => $username,
             'password' => $password,
             'nama_petugas' => $nama_petugas,
            'id_level' => $id_level,
         ]);
         return redirect('/level');
     }
}
