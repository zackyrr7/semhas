@extends('layouts.backend.main')


@section('content')
<div class="row">
    <div class="col-lg-12">
        <!-- Dropdown Card Example -->
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
           
            <!-- Card Body -->
            <div class="card-body">
<div class="mt-4">
    <form action= "{{ route('admin.barang.ubah',['id'=>$barang->id]) }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class= "from-group">
        <label for="nama">nama barang</label>
        <input class="form-control" type="text" name="nama" value="{{ $barang->nama }}">
    
    </div>
    <div class="form-group">
        <label for="harga">harga barang</label>
        <textarea class="form-control" name="harga" id="" cols="30" rows="10">
            {{$barang->harga}}
        </textarea>
    </div>
    <div class="form-group">
        <label for="foto">Gambar</label>
        <input type="file" name="foto" class="form-control" >
        
    </div>
    <input class="btn btn-primary"type="submit" value="Simpan">
</form>

</div>
@endsection