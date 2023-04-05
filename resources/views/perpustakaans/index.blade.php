@extends('layout.main')

@section('isi')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mt-2">
        </div><br>

            <form class="form-left my-2" method="get" action="{{ route('search') }}">
                    <div class="form-group w-70 mb-3">
                        <input type="text" name="search" class="form-control w-50 d-inline" id="search" placeholder="Masukkan Judul">
                        <button type="submit" class="btn btn-primary mb-1">Cari</button>
                        <a class="btn btn-success right" href="{{ route('perpustakaans.create') }}" style="margin-left:9.6cm"> Tambah Data</a>
                    </div>
            </form>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
<br>

<table class="table table-bordered">
    <tr>
        <th>Kode Buku</th>
        <th>Judul</th>
        <th>Pengarang</th>
        <th>Jenis Buku</th>
        <th>Harga</th>
        <th>QTY</th>
        <th width="300px">Action</th>
    </tr>
    @foreach ($perpustakaans as $perpustakaans1)
    <tr>

        <td>{{ $perpustakaans1->kode_bukuu }}</td>
        <td>{{ $perpustakaans1->judul }}</td>
        <td>{{ $perpustakaans1->pengarang }}</td>
        <td>{{ $perpustakaans1->jenis_buku }}</td>
        <td>{{ $perpustakaans1->harga }}</td>
        <td>{{ $perpustakaans1->qty }}</td>
        <td>
            <form action="{{ route('perpustakaans.destroy',$perpustakaans1->kode_bukuu) }}" method="POST">
                <a class="btn btn-info" href="{{ route('perpustakaans.show',$perpustakaans1->kode_bukuu) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('perpustakaans.edit',$perpustakaans1->kode_bukuu) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
{!! $perpustakaans->withQueryString()->links('pagination::bootstrap-5') !!}
@endsection