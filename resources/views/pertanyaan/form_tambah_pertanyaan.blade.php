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
    <form action= "{{ route('admin.pertanyaan.tambah') }}" method="post">
    @csrf
    <div class= "from-group">
        <label for="judul">Judul Pertanyaan</label>
        <input class="form-control" type="text" name="judul">
    
    </div>
    <div class="form-group">
        <label for="jawaban">Jawaban Pertanyaan</label>
        <textarea class="form-control" name="jawaban" id="" cols="30" rows="10"></textarea>
    </div>
    <input class="btn btn-primary"type="submit" value="Simpan">
</form>

</div>
@endsection