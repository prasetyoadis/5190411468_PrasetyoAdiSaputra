@extends('layouts.main-home')

@section('content')
<div style="background-image:url('/img/anime-background.jpg'); background-position:center">
    <div class="container">
    <div class="row" style="height: 100vh;">
        
        <div class="col-12 col-lg-12 d-flex justify-content-center align-items-center">
            <form action="/login" method="POST" class="bg-white p-4 rounded" id="form-login-register">
                @csrf
                @if (session()->has('sukses'))
                    <div class="alert alert-success alert-dismissible fade show w-100" role="alert">
                        <strong>{{ session('sukses') }}</strong> Silahkan Login!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @elseif(session()->has('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show w-100" role="alert">
                        <strong>{{ session('loginError') }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <h3 class="mt-4 text-center">Login</h3>
                <div class="mb-3 w-100">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required autofocus value="{{ old('email') }}">
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3 w-100">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" required>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
                <p class="mt-2 mb-5 text-center">Belum Punya Akun? <a href="/register">Register Sekarang!</a></p>
            </form>
        </div>
    </div>
    </div>
</div>
@endsection
