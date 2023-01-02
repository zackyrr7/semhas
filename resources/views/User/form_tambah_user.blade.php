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
    <form action= "{{ route('admin.user.tambah') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class= "from-group">
        <label for="name">Nama Konsumen</label>
        <input class="form-control" type="text" name="name">
    
    </div>
    <div class= "from-group">
        <label for="email">Nomor Hp</label>
        <input class="form-control" type="text" name="email">
    
    </div>
    <div class= "from-group">
        <label for="password">Password</label>
        <input class="form-control" type="text" name="password">
    
    </div>
    <input class="btn btn-primary"type="submit" value="Simpan">
</form>

</div>
@endsection