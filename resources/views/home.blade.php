<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <h1 class="text-center">Data Mahasiswa</h1>
        <!-- Button trigger modal -->
        <div class="container">
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah</button>
        </div>
</head>
<body>
  <div class="container">
    <div class="row">
    <table class="table table-dark table-hover">''
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Nim</th>
            <th>Prodi</th>
            <th>Action</th>
        </tr>
        @php
        $num =1;
        @endphp
    @foreach ($manusias as $manusia)
        <tr>
            <th>{{$num++}}</th>
            <td>{{$manusia->nama}}</td>
            <td>{{$manusia->nim}}</td>
            <td>{{$manusia->prodi}}</td>
            
            <td>
                <form action="{{ url('delete', $manusia->id) }}" method="post">
                    {{ csrf_field() }}
                    <a href="{{url('update',$manusia->id)}}"><button type="button" class="btn btn-info">Edit</button></a>  
                <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin')">Delete</button>
                </form>
            </td>

        </tr>
    @endforeach
    </table>
    </div>
  </div>
  
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form method="post" action="{{url("store")}}" >
                {{ csrf_field() }}
              <div class="mb-3">
                <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama">
              </div>
              <div class="mb-3">
                <input type="text" class="form-control" id="nim" placeholder="Nim" name="nim">
              </div>
              <div class="mb-3">
                <input type="text" class="form-control" id="prodi" placeholder="Prodi" name="prodi">
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-success">Simpan</button>
          </div>
            </form>
        </div>
      </div>
    </div>
</body>
</html>