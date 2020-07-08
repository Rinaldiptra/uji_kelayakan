



<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> 
<form action="{{route('storepegawai')}}" method="post">
	@csrf
  <div class="pull-left">
     <h2>Add pegawai</h2>
 
  
<div class="container">
<div class="mt-5">
	<div class="card">
  <div class="card-body">
    <form>
  <div class="form-group">
    <label for="id_pegawai"> id Pegawai</label>
    <input type="text" class="form-control" id="" name="id_pegawai">
  </div>
  <div class="form-group">
    <label for="nama_pegawai">Nama Pegawai</label>
    <input type="text" class="form-control" id="" name="nama_pegawai">
  </div>
  <div class="form-group">
    <label for="nip">Nip</label>
    <input type="text" class="form-control" id="" name="nip"Nip>

  <div class="form-group">
    <label for="alamat">Alamat</label>
    <input type="text" class="form-control" id="" name="alamat">

  <button type="submit" class="btn btn-primary">Submit</button>
  <a type="back" href="http://127.0.0.1:8000/karyawan" class="btn btn-primary">Back</a>
</form>

  </div>
</div>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </form>