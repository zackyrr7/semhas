@extends('layouts.backend.main')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">List wallet</h1>
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
                            @foreach ($wallet as $wlt)
                            <li>
                                <tr>
                                    <td>{{$wlt->user_id}}</td>
                                    <td>{{$wlt->nama}}</td>
                                    <td><a href="{{route('admin.wallet.detail',['id'=>$wlt->id])}}">Detail</a></td>
                                    <td><a href="{{route('admin.wallet.hapus',['id'=>$wlt->id])}}">Hapus</a>
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