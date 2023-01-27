@extends('layouts.backend.main')

@section('content')
<div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Detail Cuci</h1>
        <div class="row">
            <div class="col-lg-12">
                <!-- Dropdown Card Example -->
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                   
                    <!-- Card Body -->
                    <div class="card-body">
                    Id User : {{ $cuci->user_id }} <br/>
                    Nama : {{ $cuci->nama }} <br/>
                    Jenis kendaraan: {{ $cuci->jenis }}<br/>
                    Nomor Hp: {{ $cuci->nomor_hp }}<br/>
                    
                  
                    </div>
    
                    
                </div>
            </div>
        </div>
    </div>
@endsection