<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ruang;

class ruangController extends Controller
{
    public function create()
   {
    	return view('ruang.create');
    }
    public function store(Request $request)
    {
    	$id_ruang = $request->id_ruang;
    	$nama_ruang= $request->nama_ruang;
    	$kode_ruang = $request->kode_ruang;
    	$keterangan = $request->keterangan;
    	
    	ruang::create([
    		'id_ruang'=>$id_ruang,
    		'nama_ruang'=>$nama_ruang,
    		'kode_ruang'=>$kode_ruang,
    		'keterangan'=>$keterangan,
    		
    	]);
    	return redirect('/ruang');  	
    }
    public function delete($id_ruang)
    {
        $ruang = ruang::where('id_ruang',$id_ruang);
        $ruang->delete();

        return redirect('/ruang');
    }
     public function edit($id_ruang)
    {
        $ruang=ruang::all();
        $data = ruang::where('id_ruang',$id_ruang)->first();
        return view('ruang/edit',['dataruang'=>$data]);
    }


     public function update(Request $request,$id_ruang)
    {
        $data = ruang::where('id_ruang',$id_ruang);
        $id_ruang=$request->id_ruang;
        $nama_ruang=$request->nama_ruang;
        $kode_ruang=$request->kode_ruang;
        $keterangan=$request->keterangan;
       
        $data->update([
            'id_ruang' => $id_ruang,
            'nama_ruang' => $nama_ruang,
            'kode_ruang' => $kode_ruang,
            'keterangan' => $keterangan,
            
        ]);
        return redirect('/ruang');
    }
}
