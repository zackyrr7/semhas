@extends('layouts.backend.main')

@section('content')
    <div class="container-fluid">
        @if (session()->has('message'))
            <div class="text-center" style="color:green">
                {{ session()->get('message') }}
            </div>
        @endif
        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">detail User</h1>
        <div class="row">
            <div class="col-lg-12">
                <!-- Dropdown Card Example -->
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->

                    <!-- Card Body -->
                    @foreach ($tabungan as $tabungan)
                        <div class="card-body">
                            Nama: {{ $user->name ?? 'None' }} <br />
                            Tanggal: {{ $tabungan->tanggal ?? 'None' }}<br />
                            Total: {{ $tabungan->total ?? 'None' }}<br />
                        </div>
                        <a class="btn btn-danger col-3"
                            href="{{ route('admin.tabungan.hapus', ['id' => $tabungan->id]) }}">Hapus</a>
                    @endforeach
                    <h6 class="ml-4 text-success">Total Tabungan = {{ $totalTabungan }}</h6>
                </div>
                <button type="button" class="btn btn-success float-right mb-4" onclick="show()">Show Form</button>
                <form id="form-tambah" class=" d-none" action="{{ route('admin.tabungan.store') }}" method="POST"
                    style="width: 50%">
                    @csrf

                    <div class="from-group">
                        <input class="form-control" type="hidden" name="user_id" value="{{ $user->id }}">
                        <label for="tanggal">Tanggal Transaksi</label>
                        <input class="form-control" type="date" name="tanggal" required>

                    </div>
                    <div class="from-group">
                        <label for="total">Total</label>
                        <input class="form-control" type="text" name="total" required>

                    </div>
                    <input class="btn btn-primary mt-4"type="submit" value="Simpan">
                </form>

            </div>
        </div>
    </div>
@endsection
<script>
    function show() {
        document.getElementById('form-tambah').classList.remove("d-none");
    }
</script>
