@extends('layouts.backend.main')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">List pesan</h1>
    <p>Catatan:jika sudah di jemput, maka list harus di hapus</p>
    <div class="row">
        <div class="col-lg-12">
            <!-- Dropdown Card Example -->
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
               
                <!-- Card Body -->
            
                
                {{-- <ul>
                    @foreach ($pesan as $psn)
                        <li>
                        {{ $psn->nama }}
                        <a href="{{route('admin.pesan.detail',['id'=>$psn->id])}}">Detail</a>
                        <a href="{{route('admin.pesan.hapus',['id'=>$psn->id])}}">Hapus</a>
                        </li>
                    @endforeach
                </ul> --}}
                <ul>
                    <div class="table-responsive">
                        <table class="table table-striped table-sm">
                          <thead>
                            <tr>
                              <th scope="col">ID User</th>
                              <th scope="col">Nama</th>
                              <th scope="col">Detail</th>
                              <th scope="col">Hapus</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($pesan as $psn)
                            <li>
                                <tr>
                                    <td>{{$psn->user_id}}</td>
                                    <td>{{$psn->nama}}</td>
                                    <td><a href="{{route('admin.pesan.detail',['id'=>$psn->id])}}">Detail</a></td>
                                    <td><a href="{{route('admin.pesan.hapus',['id'=>$psn->id])}}">Hapus</a>
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