@extends('layouts.backend.main')


@section('content')
<div class="mt-4">
    <div class="row">
        <div class="col-lg-12">
            <!-- Dropdown Card Example -->
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
               
                <!-- Card Body -->
                <div class="card-body">
    <form action= "{{ route('admin.barang.tambah') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class= "from-group">
        <label for="judul">Nama Barang</label>
        <input class="form-control" type="text" name="nama">
    
    </div>
    <div class="form-group">
        <label for="jawaban">Jawaban Harga barang</label>
        <textarea class="form-control" name="harga" id="" cols="30" rows="10"></textarea>
    </div>
    <div class="form-group">
        <label for="foto">Gambar</label>
        <input type="file" name="foto" class="form-control" >
        
    </div>
    <input class="btn btn-primary"type="submit" value="Simpan">
</form>

</div>
@endsection