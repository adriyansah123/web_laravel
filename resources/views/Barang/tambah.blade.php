@extends('Barang.layout')

@section('title')
Tambah Data Barang
@endsection

@section('content')
<a href="{{ url('barang') }}" class="btn btn-success btn-sm">
	Daftar Barang
</a>
<form method="post" action="{{ url('barang') }}">
	{{ csrf_field() }}
	<div class="form-group">
		<label>Nama Barang</label>
		<input type="text" name="nama" class="form-control">
	</div>
	<div class="form-group">
		<label>Harga</label>
		<input type="text" name="harga" class="form-control">
	</div>
	<button type="submit" class="btn btn-success btn-block">
		Tambah Data
	</button>
</form>
@endsection