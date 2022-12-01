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
            
                
                <ul>
                    @foreach ($user as $usr)
                        <li>
                        {{ $usr->name }}
                        <a href="{{route('admin.user.detail',['id'=>$usr->id])}}">Detail</a>
                        <a href="{{route('admin.user.formubah',['id'=>$usr->id])}}">Ubah</a>
                        <a href="{{route('admin.user.hapus',['id'=>$usr->id])}}">Hapus</a>
                        </li>
                    @endforeach
                </ul>
                <a href="{{route('admin.user.formtambah')}}" class="btn btn-primary">Tambah user</a>
            </div>
        </div>
    </div>
</div>
@endsection