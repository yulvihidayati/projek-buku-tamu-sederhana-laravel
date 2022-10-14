@extends('app')
@section('content')
<div class="card">
  @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif
    <div class="card-header">
      Data Buku Tamu <a href="{{url('admin/form-tambah')}}" class="btn btn-success"> Tambah Data</a>

    </div>
    <div class="card-body">
        <table class="table" id="myTable">
            <thead class="thead-dark">
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Telepon</th>
                <th scope="col">Alamat</th>
                <th scope="col">Email</th>
                <th scope="col" style="width: 15%">Aksi</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($data as $key => $item)
              <tr>
                <th scope="row">{{$key+ 1}}</th>
                <td>{{$item->nama}}</td>
                <td>{{$item->tlp}}</td>
                <td>{{$item->alamat}}</td>
                <td>{{$item->email}}</td>
                <td>
                      
                        
                                   
                        <form action="{{url('admin/hapus-data')}}" method="post">
                            @csrf
                           <a href="{{url('admin/form-edit', $item->id)}}"class="btn btn-warning"> Edit</a>
                           <input type ="hidden" name="id" value="{{$item->id}}">
                           <button type="submit" class="btn btn-danger">Hapus</button>

                        </form>
                     
                    
                </td>
              </tr>
              @endforeach
            </tbody>
        </table>
        
    </div>
  </div>
@endsection
@section('script')
    <script>
        $(document).ready( function () {
    $('#myTable').DataTable();
} );
    </script>
@endsection