@extends('layouts.backend.main')

@section('content')
<div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">detail pesan</h1>
        <div class="row">
            <div class="col-lg-12">
                <!-- Dropdown Card Example -->
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                   
                    <!-- Card Body -->
                    <div class="card-body">
                    Nama pemesan: {{ $pesan->nama }} <br/>
                    Jenis Barang: {{ $pesan->barang }}<br/>
                    Alamat: {{ $pesan->alamat }}<br/>
                    Nomor Hp: {{ $pesan->nomor_hp }}<br/>
                    Tanggal: {{ $pesan->tanggal }}<br/>
                    </div>
    
                    
                </div>
            </div>
        </div>
    </div>
@endsection