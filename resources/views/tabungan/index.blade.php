@extends('layouts.backend.main')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">List Tabungan</h1>
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
                        <a href="{{route('admin.tabungan.detail',['id'=>$usr->id])}}">Tabungan</a>

                        </li>
                    @endforeach
                </ul>
                {{-- <a href="{{route('admin.user.formtambah')}}" class="btn btn-primary">Tambah barang</a> --}}
            </div>
        </div>
    </div>
</div>
@endsection
