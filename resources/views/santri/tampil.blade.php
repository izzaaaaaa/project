@extends('layout')
@section('konten')
    
<div class="d-flex">
    <h4>List santri</h4>
    <div class="ms-auto">
        <a class="btn btn-success" href="{{ Route('Santri.tambah')}}" >Tambah Santri</a>
    </div>
</div>


<table class="table">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>No HP</th>
        <th>Jenis Kelamin</th>
        <th>Asal Ponpes</th>
        <th>Aksi</th>
    </tr>
    @foreach ($santri as $no=>$data)
    <tr>
        <td>{{ $no+1 }}</td>
        <td>{{ $data->nama }}</td>
        <td>{{ $data->alamat }}</td>
        <td>{{ $data->no_hp }}</td>
        <td>{{ $data->jenis_kelamin }}</td>
        <td>{{ $data->asal_ponpes }}</td>
        <td>
            <a href="{{ route('Santri.edit', $data->id)}}" class="btn btn-sm btn-warning">Edit</a>
            <form action="{{ route('Santri.delete', $data->id)}}" method="post">
                @csrf
                <button class="btn btn-sm btn-danger">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection