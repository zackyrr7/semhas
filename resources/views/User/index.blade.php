@extends('layouts.backend.main')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">List User</h1>
    <div class="row">
        <div class="col-lg-12">
            <!-- Dropdown Card Example -->
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
               
                <!-- Card Body -->
            
                
                <a href="{{route('admin.user.formtambah')}}" class="btn btn-primary">Tambah user</a>
                <ul>
                    <div class="table-responsive">
                        <table class="table table-striped table-sm">
                          <thead>
                            <tr>
                              <th scope="col">ID user</th>
                              <th scope="col">Nama</th>
                              
                              <th scope="col">Detail</th>
                              <th scope="col">Ubah</th>
                              <th scope="col">Hapus</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($user as $usr)
                            <li>
                                <tr>
                                    <td>{{$usr->id}}</td>
                                    <td>{{$usr->name}}</td>
                                    
                                    <td><a href="{{route('admin.user.detail',['id'=>$usr->id])}}">Detail</a></td>
                                    <td> <a href="{{route('admin.user.formubah',['id'=>$usr->id])}}">Ubah</a></td>
                                    <td><a href="{{route('admin.user.hapus',['id'=>$usr->id])}}">Hapus</a>
                                    </td>
                                  </tr>
                            </li>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
               
            </ul>


                
            </div>
        </div>
    </div>
</div>
@endsection