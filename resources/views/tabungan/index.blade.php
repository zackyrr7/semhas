@extends('layouts.backend.main')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">List Tabungan</h1>
    <div class="row">
        <div class="col-lg-12">
            <!-- Dropdown Card Example -->
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->

                <!-- Card Body -->


        
                <ul>
                    <div class="table-responsive">
                        <table class="table table-striped table-sm">
                          <thead>
                            <tr>
                              <th scope="col">ID Barang</th>
                              <th scope="col">Nama</th>
                              <th scope="col">Tabungan</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($user as $usr)
                            <li>
                                <tr>
                                    <td>{{$usr->id}}</td>
                                    <td>{{$usr->name}}</td>
                                    <td><a href="{{route('admin.tabungan.detail',['id'=>$usr->id])}}">Tabungan</a>
                                    </td>
                                    
                                  </tr>
                            </li>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
               
            </ul>

                {{-- <a href="{{route('admin.user.formtambah')}}" class="btn btn-primary">Tambah barang</a> --}}
            </div>
        </div>
    </div>
</div>
@endsection
