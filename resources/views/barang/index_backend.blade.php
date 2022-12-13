@extends('layouts.backend.main')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">List barang</h1>
    <div class="row">
        <div class="col-lg-12">
            <!-- Dropdown Card Example -->
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
               
                <!-- Card Body -->
                <a href="{{route('admin.barang.formtambah')}}" class="btn btn-primary">Tambah barang</a>
                <ul>
                        <div class="table-responsive">
                            <table class="table table-striped table-sm">
                              <thead>
                                <tr>
                                  <th scope="col">ID Barang</th>
                                  <th scope="col">Nama</th>
                                  <th scope="col">Harga</th>
                                  <th scope="col">Detail</th>
                                  <th scope="col">Ubah</th>
                                  <th scope="col">Hapus</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach ($barang as $brg)
                                <li>
                                    <tr>
                                        <td>{{$brg->id}}</td>
                                        <td>{{$brg->nama}}</td>
                                        <td>{{$brg->harga}}</td>
                                        <td><a href="{{route('admin.barang.detail',['id'=>$brg->id])}}">Detail</a></td>
                                        <td> <a href="{{route('admin.barang.formubah',['id'=>$brg->id])}}">Ubah</a></td>
                                        <td><a href="{{route('admin.barang.hapus',['id'=>$brg->id])}}">Hapus</a>
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