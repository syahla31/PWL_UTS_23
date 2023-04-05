@extends('layout.main')

@section('isi')
<div class="container mt-5">

    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Edit Data
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your i
                    nput.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="post" action="{{ route('perpustakaans.update', $perpustakaans->kode_buku) }}" id="myForm">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="kode_buku">kode_buku</label>
                        <input type="text" name="kode_bukuu" class="form-control" id="kode_bukuu" value="{{ $Perpustakaan->kode_bukuu }}" ariadescribedby="kode_bukuu">
                    </div>
                    <div class="form-group">
                        <label for="judul">judul</label>
                        <input type="text" name="judul" class="form-control" id="judul" value="{{ $Perpustakaan->judul }}" ariadescribedby="judul">
                    </div>
                    <div class="form-group">
                        <label for="pengarang">pengarang</label>
                        <input type="pengarang" name="pengarang" class="form-control" id="pengarang" value="{{ $Perpustakaan->pengarang }}" ariadescribedby="pengarang">
                    </div>
                    <div class="form-group">
                        <label for="jenis_buku">jenis_buku</label>
                        <input type="jenis_buku" name="jenis_buku" class="form-control" id="jenis_buku" value="{{ $Perpustakaan->jenis_buku }}" ariadescribedby="jenis_buku">
                    </div>
                    <div class="form-group">
                        <label for="harga">harga</label>
                        <input type="harga" name="harga" class="form-control" id="harga" value="{{ $Perpustakaan->harga }}" ariadescribedby="harga">
                    </div>
                    <div class="form-group">
                        <label for="qty">qty</label>
                        <input type="qty" name="qty" class="form-control" id="qty" value="{{ $Perpustakaan->qty }}" ariadescribedby="qty">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection