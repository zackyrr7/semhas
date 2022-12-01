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
            
                
                <ul>
                    @foreach ($pertanyaan as $prt)
                        <li>
                        {{ $prt->judul }}
                        <a href="{{route('admin.pertanyaan.detail',['id'=>$prt->id])}}">Detail</a>
                        <a href="{{route('admin.pertanyaan.formubah',['id'=>$prt->id])}}">Ubah</a>
                        <a href="{{route('admin.pertanyaan.hapus',['id'=>$prt->id])}}">Hapus</a>
                        </li>
                    @endforeach
                </ul>
                <a href="{{route('admin.pertanyaan.formtambah')}}" class="btn btn-primary">Tambah Pertanyaan</a>
                
            </div>
        </div>
    </div>
</div>
@endsection