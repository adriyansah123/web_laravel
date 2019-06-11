@extends('Barang.layout')

@section('title')
Barang
@endsection

@section('content')
<a href="{{ url('barang/create') }}" class="btn btn-success btn-sm">
    Tambah Barang
</a>
<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Tools</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $i => $value)
        <tr>
            <td>{{ $i+1 }}</td>
            <td>{{ $value->nama }}</td>
            <td>{{ $value->harga }}</td>
            <td>
                <a href="{{ url('barang/'.$value->id.'/edit') }}" class="btn btn-warning btn-sm">Ubah</a>
                <form action="{{ url('barang/'.$value->id) }}" method="POST">
                 {{ csrf_field() }}
                 <input type="hidden" name="_method" value="DELETE">
                 <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">
                     Hapus
                 </button>
             </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection