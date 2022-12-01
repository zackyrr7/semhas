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
    <form action= "{{ route('admin.user.ubah',['id'=>$user->id]) }}" method="post">
    @csrf
    <div class= "from-group">
        <label for="name">nama user</label>
        <input class="form-control" type="text" name="name" value="{{ $user->name }}">
    
    </div>
    <div class="form-group">
        <label for="email">email user</label>
        <textarea class="form-control" name="email" id="" cols="30" rows="10">
            {{$user->email}}
        </textarea>
    </div>
    <input class="btn btn-primary"type="submit" value="Simpan">
</form>

</div>
@endsection