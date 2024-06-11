@extends('layout')
@section('konten')
    


<h4>Edit</h4>

<form action="{{ route('Santri.update', $santri->id)}}" method="post">
    @csrf
    <label>Nama</label>
    <input type="text" name="nama" value="{{ $santri->name }}" class="form-control mb-2">
    <label>Alamat</label>
    <input type="text" name="alamat" value="{{ $santri->alamat }}" class="form-control mb-2">
    <label>No HP</label>
    <input type="text" name="no_hp" value="{{ $santri->no_hp }}"  class="form-control mb-2">
    <label>jenis Kelamin</label>
    <input type="text" name="jenis_kelamin" value="{{ $santri->jenis_kelamin }}" class="form-control mb-2">
    <label>Asal Ponpes</label>
    <input type="text" name="asal_ponpes" value="{{ $santri->asal_ponpes }}" class="form-control mb-2">

    <button class="btn btn-primary">Edit</button>
</form>

@endsection