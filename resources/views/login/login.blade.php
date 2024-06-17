@extends('layout')
@section('konten')
    <div class="w-50 center border rounded px-3 py-3 mx-auto">
        <h1>Login</h1>
        <form action="/login/login" method="POST">
        @csrf
        @method('POST')
            <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" value="{{Session::get('email')}}" name="email" class="form-control">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="mb-3 d-grid">
                <button name="submit" type="submit" class="btn btn-primary">Login</button>
            </div>
            <div class="text-center" style="margin-top: 15px">
                Belum punya akun? <a href="register">Silahkan Register</a>
              </div>
    
        </form>
    </div>
   
@endsection