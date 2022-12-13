@extends('layouts.backend.main')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">List PDAM</h1>
    <p>Catatan:jika transaksi sudah selesai, maka list harus di hapus</p>
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
                              <th scope="col">ID User</th>
                              <th scope="col">Nama</th>
                              <th scope="col">Detail</th>
                              <th scope="col">Hapus</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($pdam as $pam)
                            <li>
                                <tr>
                                    <td>{{$pam->user_id}}</td>
                                    <td>{{$pam->nama}}</td>
                                    <td><a href="{{route('admin.pdam.detail',['id'=>$pam->id])}}">Detail</a></td>
                                    <td><a href="{{route('admin.pdam.hapus',['id'=>$pam->id])}}">Hapus</a>
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