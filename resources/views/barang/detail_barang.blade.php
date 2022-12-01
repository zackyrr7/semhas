@extends('layouts.backend.main')

@section('content')
<div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">detail barang</h1>
        <div class="row">
            <div class="col-lg-12">
                <!-- Dropdown Card Example -->
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                   
                    <!-- Card Body -->
                    <div class="card-body">
                    Judul barang: {{ $barang->nama }} <br/>
                    Jawaban barang: {{ $barang->harga }}<br/>
                    <img src="{{asset('storage/'.$barang->foto)}}" height="300px" width="300px">
                    </div>
    
                    {{-- Storage::disk('public') -> put($imageName, file_get_contents($request->foto));
            $url = Storage::url("/storage/app/{$imageName}");
            $path = public_path($url); --}}
                </div>
            </div>
        </div>
    </div>
@endsection