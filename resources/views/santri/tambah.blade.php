@extends('layout')
@section('konten')
    


<h4>Tambah santri</h4>

<form action="{{ route('Santri.submit')}}" method="post">
    @csrf
    <label>Nama</label>
    <input type="text" name="nama" class="form-control mb-2">
    <label>Alamat</label>
    <input type="text" name="alamat" class="form-control mb-2">
    <label>No HP</label>
    <input type="number" name="no_hp" class="form-control mb-2">
    <label>jenis Kelamin</label>
    <input type="text" name="jenis_kelamin" class="form-control mb-2">
    <label>Asal Ponpes</label>
    <input type="text" name="asal_ponpes" class="form-control mb-2">

    <button class="btn btn-primary">Tambah</button>
</form>

@endsection