@extends('layouts.app')
   
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    You are Admin.
                </div>
        <ul>
            <li><a href="/ruang"><i class="fas fa-user"></i>Ruang</a></li>
            <li><a href="/jenis"><i class="fas fa-user"></i>jenis</a></li>
            <li><a href="/inventaris"><i class="fas fa-book"></i>inventaris</a></li>
            <li><a href="/peminjaman"><i class="fas fa-book"></i>peminjaman</a></li>
            <li><a href="/pegawai"><i class="fas fa-book"></i>pegawai</a></li>
            <li><a href="/dp"><i class="fas fa-book"></i>detail peminjaman</a></li>
            
        </ul>
            </div>
        </div>
    </div>
</div>
@endsection