<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pegawai;
class pegawaiController extends Controller
{
    public function create()
   {
       
    	return view('pegawai.create');
    }
    public function store(Request $request)
    {
    	$id_pegawai = $request->id_pegawai;
    	$nama_pegawai= $request->nama_pegawai;
    	$nip = $request->nip;
        $alamat = $request->alamat;
        
    	pegawai::create([
    		'id_pegawai'=>$id_pegawai,
    		'nama_pegawai'=>$nama_pegawai,
            'nip'=>$nip,
            'alamat' =>$alamat,
    		
    	]);
    	return redirect('/pegawai');  	
    }
     public function delete($id)
    {
        $pegawai = pegawai::where('id',$id);
        $pegawai->delete();

        return redirect('/pegawai');
    }
     public function edit($id)
    {
    	$pegawai = pegawai::all();
        $data = pegawai::where('id',$id)->first();
        return view('pegawai/edit',['datapegawai'=>$data],['datapegawai'=>$data]);
    }


     public function update(Request $request,$id)
    {
        $data= pegawai::where('id',$id);
        $id_pegawai=$request->id_pegawai;
        $nama_pegawai=$request->nama_pegawai;
        $nip=$request->nip;
        $alamat=$request->alamat;
        
        $data->update([
            'id_pegawai' => $id_pegawai,
            'nama_pegawai' => $nama_pegawai,
            'nip' => $nip,
            'alamat'=>$alamat,
           
        ]);
        return redirect('/pegawai');
    }
}
