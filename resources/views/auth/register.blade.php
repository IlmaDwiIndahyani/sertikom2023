@extends('layouts.app')

@section('content')
<div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
            <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
            <div class="col-lg-7">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Buat akun!</h1>
                    </div>
                    <form action="{{ route('register') }}" method="post" class="user">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user @error('name') is-invalid @enderror" id="name" name="name"
                                placeholder="Masukkan Nama" value="{{ old('name') }}">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror" id="email" name="email"
                                placeholder="Masukkan Alamat Email" value="{{ old('email') }}">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control form-control-user @error('password') is-invalid @enderror"
                                id="password" name="password" placeholder="Masukkan Password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control form-control-user"
                                id="password-confirm" placeholder="Ulangi Password" name="password_confirmation">
                        </div>
                        <button class="btn btn-primary btn-user btn-block" type="submit">
                            Register Account
                        </button>
                    </form>
                    <hr>
                    <div class="text-center">
                        <a class="small" href="{{ route('password.request') }}">
                            {{ __('Lupa password anda?') }}
                        </a>
                    </div>
                    <div class="text-center">
                        <a class="small" href="{{ route('login') }}">Sudah punya akun? Login!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
