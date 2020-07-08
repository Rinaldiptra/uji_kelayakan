<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\peminjaman;
use App\pegawai;
use App\inventaris;
class peminjamanController extends Controller
{
    
    public function create()
    {
        $inv=inventaris::all();
         $pegawai=pegawai::all();
         return view('peminjaman.create',compact('pegawai','inv'));
     }
     public function store(Request $request)
     {
         $id_peminjaman = $request->id_peminjaman;
         $id_inventaris = $request->id_inventaris;
         $tanggal_pinjam = $request->tanggal_pinjam;
         $tanggal_kembali = $request->tanggal_kembali;
         $status_peminjaman = $request->status_peminjaman;
         $id_pegawai = $request->id_pegawai;
         peminjaman::create([
             'id_peminjaman'=>$id_peminjaman,
             'id_inventaris'=>$id_inventaris,
             'tanggal_pinjam'=>$tanggal_pinjam,
             'tanggal_kembali'=>$tanggal_kembali,
             'status_peminjaman'=>$status_peminjaman,
             'id_pegawai'=>$id_pegawai,

             
         ]);
         return redirect('/peminjaman');  	
     }
      public function delete($id_peminjaman)
     {
         $peminjam= peminjaman::where('id_peminjaman',$id_peminjaman);
         $peminjam->delete();
 
         return redirect('/peminjaman');
     }
      public function edit($id_peminjaman)
     {
         $peminjam = peminjaman::all();
         $data = peminjaman::where('id_peminjaman',$id_peminjaman)->first();
         return view('peminjaman/edit',['datapeminjaman'=>$data],['datapeminjaman'=>$data]);
     }
 
 
      public function update(Request $request,$id_peminjaman)
     {
         $data= peminjaman::where('id_peminjaman',$id_peminjaman);
         $id_peminjaman=$request->id_peminjaman;
         $id_inventaris=$request->id_inventaris;
         $tanggal_pinjam=$request->tanggal_pinjam;
         $tanggal_kembali=$request->tanggal_kembali;
         $status_peminjaman=$request->status_peminjaman;
         $id_pegawai=$request->id_pegawai;
         
         
         $data->update([
             'id_peminjaman' => $id_peminjaman,
             'id_inventaris' => $id_inventaris,
             'tanggal_pinjam' => $tanggal_pinjam,
             'tanggal_kembali' => $tanggal_kembali,
             'status_peminjaman' => $status_peminjaman,
             'id_pegawai' => $id_pegawai,
         ]);
         return redirect('/peminjaman');
     }
}
