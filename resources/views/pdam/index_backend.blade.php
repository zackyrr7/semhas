@extends('layouts.backend.main')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">List PDAM</h1>
    <p>Catatan:jika sudah di jemput, maka list harus di hapus</p>
    <div class="row">
        <div class="col-lg-12">
            <!-- Dropdown Card Example -->
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
               
                <!-- Card Body -->
            
                
                <ul>
                    @foreach ($pdam as $pam)
                        <li>
                        {{ $pam->nama }}
                        <a href="{{route('admin.pdam.detail',['id'=>$pam->id])}}">Detail</a>
                        <a href="{{route('admin.pdam.hapus',['id'=>$pam->id])}}">Hapus</a>
                        </li>
                    @endforeach
                </ul>
                
            </div>
        </div>
    </div>
</div>
@endsection