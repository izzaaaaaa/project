@extends('layout')
@section('konten')
<div class="w-50 center border rounded px-3 py-3 mx-auto">
    <a href="{{ url('login')}}" class=" btn btn-secondary">< kembali</a>
    <h1>Register</h1>
    <form action="/register/register" method="POST">
    @csrf
        <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="nama" value="{{ Session::get('nama')}}" name="nama" class="form-control">
        </div>
        <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" value="{{ Session::get('email')}}" name="email" class="form-control">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control">
        </div>
        <div class="mb-3 d-grid">
            <button name="submit" type="submit" class="btn btn-primary">Register</button>
        </div>
    </form>
</div>

@endsection