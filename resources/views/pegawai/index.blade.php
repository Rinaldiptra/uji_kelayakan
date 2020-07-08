  

     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> 

<div class="container">

 <div class="row">
   <div class="col-lg-12 margin-tb">
  <div class="pull-left">
     <h2>Data pegawai</h2>
  </div>

	<div class="pull-right">
        <a class="btn btn-success" href="{{url('/pegawai/create')}}"> tambah pegawai</a>
    </div>

<div class="mt-5">
  <div class="card">
  <div class="card-body">
 <table class="table">
  <thead >
    <tr>
      
      <th scope="col">id pegawai</th>
      <th scope="col">Nama Pegawai</th>
      <th scope="col">nip</th>
      <th scope="col">Alamat</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
    
    <tbody>
      @foreach ($datapegawai as $pegawai) 
    <tr>
      
      <td>{{$pegawai->id_pegawai}}</td>
      <td>{{$pegawai->nama_pegawai}}</td>
      <td>{{$pegawai->nip}}</td>
      <td>{{$pegawai->alamat}}</td>
      <td>
        <a href="/pegawai/{{$pegawai->id}}/delete/" class="btn btn-danger"> Delete</a> 
        <a href="/pegawai/{{$pegawai->id}}/edit/" class="btn btn-warning"> Edit</a> 
    </td>  
    </tr>
    @endforeach    
</tbody>
</table>
</div>
 
  </div>
 <a type="back" href="http://127.0.0.1:8000/admin/home" class="btn btn-primary">Back</a>
</div>




 



<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

