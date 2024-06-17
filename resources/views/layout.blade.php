<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Santri Baru</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css')}}">
</head>
<body>
    
    <h1 class="text-center nt-3">Daftar Santri baru Asrama i</h1>
    {{-- <div class="login-card">
        <div class="login-card-header"> --}}
            {{-- <div class="text-center">
                {{-- <div class="circle">
                    <svg width="100" height="100" viewBox="0 0 500 500" src="logo.svg ">
                        <circle cx="250" cy="250" r="200"/>
                        </svg>
                        </div> --}}
                {{-- <embed type="image/svg+xml" src="logo.svg" width="300" height="300"> --}}
                {{-- <img src="{{ asset('public/logo.svg') }}" alt="Logo" width="100"> --}}
            {{-- </div> --}}
    <div class="nt-3 container">
        <main class="container">
            @if (Auth::check())
                @include('menu')
            @endif
            @include('pesan')
            @yield('konten')
        </main>  
    </div>
</body>
</html>