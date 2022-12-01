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
            
                
                <ul>
                    @foreach ($barang as $brg)
                        <li>
                        {{ $brg->nama }}
                        <a href="{{route('admin.barang.detail',['id'=>$brg->id])}}">Detail</a>
                        <a href="{{route('admin.barang.formubah',['id'=>$brg->id])}}">Ubah</a>
                        <a href="{{route('admin.barang.hapus',['id'=>$brg->id])}}">Hapus</a>
                        </li>
                    @endforeach
                </ul>
                <a href="{{route('admin.barang.formtambah')}}" class="btn btn-primary">Tambah barang</a>
                
            </div>
        </div>
    </div>
</div>
@endsection