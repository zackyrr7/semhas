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
    <form action= "{{ route('admin.pertanyaan.ubah',['id'=>$pertanyaan->id]) }}" method="post">
    @csrf
    <div class= "from-group">
        <label for="judul">judul pertanyaan</label>
        <input class="form-control" type="text" name="judul" value="{{ $pertanyaan->judul }}">
    
    </div>
    <div class="form-group">
        <label for="jawaban">Jawaban pertanyaan</label>
        <textarea class="form-control" name="jawaban" id="" cols="30" rows="10">
            {{$pertanyaan->jawaban}}
        </textarea>
    </div>
    <input class="btn btn-primary"type="submit" value="Simpan">
</form>

</div>
@endsection