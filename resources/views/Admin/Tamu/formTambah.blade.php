@extends('app')
@section('content')


    <div class="d-flex justify-content-center">
        <div class="card" style="width:40%">
            <div class="card-header">
              Form Tambah Data Buku Tamu
            </div>
            <div class="card-body">
              <form action="{{url('admin/simpan-data')}}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama</label>
                  <input type="nama" class="form-control" name="nama" id="nama" aria-describedby="nama">
                  
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Telepon</label>
                  <input type="text" class="form-control" name="telepon" id="telepon" aria-describedby="telepon">
                 
                </div>
                <div class="form-group">
                  <label for="alamat">Alamat</label>
                  <textarea name="alamat" class="form-control" ></textarea>
                  
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" name="email" id="email" aria-describedby="email">
                  
                </div>
                
                
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
            
          </div>
    </div>
@endsection