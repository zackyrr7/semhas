@extends('layouts.backend.main')

@section('content')
<div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">detail E-Wallet</h1>
        <div class="row">
            <div class="col-lg-12">
                <!-- Dropdown Card Example -->
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                   
                    <!-- Card Body -->
                    <div class="card-body">
                    Nama : {{ $wallet->nama }} <br/>
                    Jenis E-Wallet: {{ $wallet->jenis }}<br/>
                    Nomor Hp: {{ $wallet->nomor_hp }}<br/>
                    total: {{ $wallet->total }}<br/>
                    Nomor Wallet: {{ $wallet->no_wallet }}<br/>
                  
                    </div>
    
                    
                </div>
            </div>
        </div>
    </div>
@endsection