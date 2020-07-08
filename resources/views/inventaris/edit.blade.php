<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> 


<form action="{{ url('updateinventaris/'.$inventaris->id)}}" method="POST">
  @csrf
  @method('PUT')
  
<div class="container">
<div class="mt-5">
  <div class="pull-left">
     <h2>Edit Inventaris</h2>
  </div>
  <div class="card">
  <div class="card-body">
  <div class="form-group">
    <label>id inventaris</label>
  <input type="text" name="id_inventaris" value="{{ $inventaris->id_ruang}}" class="form-control" placeholder="id_inventaris">
  </div>
 
 <div class="form-group">
  <label>Nama</label>
   <input type="text" name="nama" value="{{ $inventaris->nama}}" class="form-control" placeholder="Name">
  </div>
  
  <div class="form-group">
    <label for="no_hp">kondisi</label>
    <input type="text" name="kondisi" value="{{ $inventaris->kondisi }}" class="form-control" placeholder="kondisi">
  </div>

<div class="form-group">
    <label for="keterangan">keterangan</label>
    <input type="text" name="keterangan" value="{{ $inventaris->keterangan}}" class="form-control" placeholder="alamat">
  </div>
  <div class="form-group">
    <label for="jumlah">jumlah</label>
    <input type="text" name="jumlah" value="{{ $inventaris->jumlah}}" class="form-control" placeholder="alamat">
  </div>
  
  <div class="col-xs-12 col-sm-12 col-md-12">
               <div class="form-group">
                <strong>ID Jenis:</strong>
                 <select name="id_jenis" class="form-control">
                 @foreach ($jenis as $data)
                <option value="{{ $data->id_jenis}}"  >{{$data->nama_jenis}}</rayon>
                @endforeach
                </select>
            </div>
        </div>
  <div class="form-group">
    <label for="tanggal_registrasi">tanggal registrasi</label>
    <input type="date" name="tanggal_registrasi" value="{{ $inventaris->tanggal_registrasi}}" class="form-control" placeholder="alamat">
  </div>
  <div class="col-xs-12 col-sm-12 col-md-12">
               <div class="form-group">
                <strong>ID Ruangan:</strong>
                 <select name="id_ruang" class="form-control">
                 @foreach ($ruang as $data)
                <option value="{{ $data->id_ruang}}"  >{{$data->nama_ruang}}</rayon>
                @endforeach
                </select>
            </div>
        </div>
  <div class="form-group">
    <label for="kode_inventaris">kode inventaris</label>
    <input type="text" name="kode_inventaris" value="{{ $inventaris->kode_inventaris}}" class="form-control" placeholder="alamat">
  </div>
  <div class="form-group">
    <label for="id petugas">id petugas</label>
    <input type="text" name="id_petugas" value="{{ $inventaris->id_petugas}}" class="form-control" placeholder="alamat">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
  <a type="back" href="http://127.0.0.1:8000/ruang" class="btn btn-primary">Back</a>
</div>
</div>
</div>
</form>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
