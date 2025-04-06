@extends('layouts.adminlte-auth')
@section('title', 'Forgot Password')
@section('content')
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Forgot your password? No problem. Just let us know your email address and we will email
                you a password reset link that will allow you to choose a new one.</p>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="input-group mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}"
                        required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block">Email Password Reset Link</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
