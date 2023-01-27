@extends('layouts.backend.main')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">List Pertanyaan</h1>
    <div class="row">
        <div class="col-lg-12">
            <!-- Dropdown Card Example -->
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
               
                <!-- Card Body -->
            
                
            
                <a href="{{route('admin.pertanyaan.formtambah')}}" class="btn btn-primary">Tambah Pertanyaan</a>
                
                <ul>
                    <div class="table-responsive">
                        <table class="table table-striped table-sm">
                          <thead>
                            <tr>
                              <th scope="col">ID Pertanyaan</th>
                              <th scope="col">Judul</th>
                              
                              <th scope="col">Detail</th>
                              <th scope="col">Ubah</th>
                              <th scope="col">Hapus</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($pertanyaan as $prt)
                            
                                <tr>
                                    <td>{{$prt->id}}</td>
                                    <td>{{$prt->judul}}</td>
                                    
                                    <td><a href="{{route('admin.pertanyaan.detail',['id'=>$prt->id])}}">Detail</a></td>
                                    <td> <a href="{{route('admin.pertanyaan.formubah',['id'=>$prt->id])}}">Ubah</a></td>
                                    <td><a href="{{route('admin.pertanyaan.hapus',['id'=>$prt->id])}}">Hapus</a>
                                    </td>
                                  </tr>
                            
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