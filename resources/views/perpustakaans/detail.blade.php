@extends('layout.main')

@section('isi')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Detail Data
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>kode_buku: </b>{{$Perpustakaan->kode_bukuu}}</li>
                    <li class="list-group-item"><b>judul: </b>{{$Perpustakaan->judul}}</li>
                    <li class="list-group-item"><b>pengarang: </b>{{$Perpustakaan->pengarang}}</li>
                    <li class="list-group-item"><b>jenis_buku: </b>{{$Perpustakaan->jenis_buku}}</li>
                    <li class="list-group-item"><b>harga: </b>{{$Perpustakaan->harga}}</li>
                    <li class="list-group-item"><b>qty: </b>{{$Perpustakaan->qty}}</li>
                </ul>
            </div>
            <a class="btn btn-success mt3" href="{{ route('perpustakaans.index') }}">Kembali</a>
        </div>
    </div>
</div>
@endsection