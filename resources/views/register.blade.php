@extends('layouts.main-home')

@section('content')
    <div style="background-image:url('https://wallpaperaccess.com/full/4326438.jpg'); background-position:center">
    <div class="container">
        <div class="row" style="height: 100vh">
            <div class="col-12 d-flex justify-content-center align-items-center">
                <form action="/register" method="POST" class="bg-white p-4 rounded">
                    @csrf  
                    <h3 class="mt-3 text-center">Register</h3>
                    <div class="mb-3" style="width:480px">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" required value="{{ old('name') }}">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3" style="width:480px">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" required value="{{ old('email') }}">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3" style="width:480px">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" required>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Register</button>
                    <p class="mt-2 mb-3 text-center">Sudah Punya Akun? <a href="/login">Login Sekarang!</a></p>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
