@extends('layout')
@section('konten')
<div class="w-50 center border rounded px-3 py-3 mx-auto">
    {{-- <a href="{{ url('login')}}" class=" btn btn-secondary">kembali</a> --}}
    <h1>Register</h1>
    <form action="/register/register" method="POST">
    @csrf
        <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="name" value="{{ Session::get('name')}}" name="name" class="form-control">
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
        <div class="text-center" style="margin-top: 15px">
            Sudah punya akun? <a href="{{ url('login')}}">Silahkan Log in</a>
          </div>
    </form>
</div>

@endsection