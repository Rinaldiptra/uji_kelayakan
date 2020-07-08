<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\inventaris;
use App\jenis;
use App\ruang;
class inventarisController extends Controller
{

     public function create()
   {
   		$jenis=jenis::all();
   		$ruang=ruang::all();
    	return view('inventaris.create',compact('jenis','ruang'));
    }
    public function store(Request $request)
    {
    	$id_inventaris = $request->id_inventaris;
    	$nama= $request->nama;
    	$kondisi = $request->kondisi;
    	$keterangan= $request->keterangan;
    	$jumlah= $request->jumlah;
    	$id_jenis= $request->id_jenis;
    	$tanggal_registrasi= $request->tanggal_registrasi;
    	$id_ruang= $request->id_ruang;
    	$kode_inventaris= $request->kode_inventaris;
    	$id_petugas= $request->id_petugas;
    	
    	inventaris::create([
    		'id_inventaris'=>$id_inventaris,
    		'nama'=>$nama,
    		'kondisi'=>$kondisi,
    		'keterangan'=>$keterangan,
    		'jumlah'=>$jumlah,
    		'id_jenis'=>$id_jenis,
    		'tanggal_registrasi'=>$tanggal_registrasi,
    		'id_ruang'=>$id_ruang,
    		'kode_inventaris'=>$kode_inventaris,
    		'id_petugas'=>$id_petugas,
    	]);
    	return redirect('/inventaris');  	
    }
     public function delete($id_inventaris)
    {
        $inv = inventaris::where('id_inventaris',$id_inventaris);
        $inv->delete();

        return redirect('/inventaris');
    }
     public function edit($id_inventaris)
    {
        $jenis=jenis::all();
   		$ruang=ruang::all();
    	$inv = inventaris::all();
        $inventaris = inventaris::where('id_inventaris',$id_inventaris)->first();
        return view('inventaris/edit',compact('jenis','ruang','inventaris'));
    }


     public function update(Request $request,$id_inventaris)
    {
        $data= inventaris::where('id_inventaris',$id_inventaris);
        $id_inventaris=$request->id_inventaris;
        $nama=$request->nama;
        $kondisi=$request->kondisi;
        $keterangan=$request->keterangan;
        $jumlah=$request->jumlah;
        $id_jenis=$request->id_jenis;
        $tanggal_registrasi=$request->tanggal_registrasi;
        $id_ruang=$request->id_ruang;
        $kode_inventaris=$request->kode_inventaris;
        $id_petugas=$request->id_petugas;

        
        
        $data->update([
            'id_inventaris' => $id_inventaris,
            'nama' => $nama,
            'kondisi' => $kondisi,
            'keterangan' => $keterangan,
            'jumlah' => $jumlah,
            'id_jenis' => $id_jenis,
            'tanggal_registrasi' => $tanggal_registrasi,
            'id_ruang' => $id_ruang,
            'kode_inventaris' => $kode_inventaris,
            'id_petugas' => $id_petugas,
           
        ]);
        return redirect('/inventaris');
    }
}

