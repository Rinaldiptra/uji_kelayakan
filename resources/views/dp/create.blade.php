



<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> 
<form action="{{route('storedp')}}" method="post">
	@csrf
  <div class="pull-left">
     <h2>Add detail</h2>
 
  
<div class="container">
<div class="mt-5">
	<div class="card">
  <div class="card-body">
    <form>
  <div class="form-group">
    <label for="id_dp"> id detail</label>
    <input type="text" class="form-control" id="" name="id_dp">
  </div>
  <div class="form-group">
  <strong> ID Inventaris:</strong>
    <select name="id_inventaris" class="form-control">
      @foreach($inv as $data)
    <option value="{{ $data->nama}}">{{$data->nama}}</option>
    @endforeach
    </select>
  </div>
<div class="form-group">
    <label for="jumlah">jumlah</label>
    <input type="text" class="form-control" id="" name="jumlah">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
  <a type="back" href="http://127.0.0.1:8000/karyawan" class="btn btn-primary">Back</a>
</form>

  </div>
</div>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </form>