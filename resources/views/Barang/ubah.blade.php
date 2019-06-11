@extends('Barang.layout')

@section('title')
Ubah Data Barang
@endsection

@section('content')
<a href="{{ url('barang') }}" class="btn btn-success btn-sm">
	Daftar Barang
</a>
<form method="post" action="{{ url('barang/'.$brg->id) }}">
	{{ csrf_field() }}
	<input type="hidden" name="_method" value="PUT">
	<div class="form-group">
		<label>Nama Barang</label>
		<input type="text" name="nama" value="{{ $brg->nama }}" class="form-control">
	</div>
	<div class="form-group">
		<label>Harga Barang</label>
		<input type="text" name="harga" value="{{ $brg->harga }}" class="form-control">
	</div>
	<button type="submit" class="btn btn-warning btn-block">
		Ubah Data
	</button>
</form>
@endsection