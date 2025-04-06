@extends('layouts.adminlte-auth')
@section('title', 'Confirm Password')
@section('content')
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Please confirm your password to continue.</p>
            <form method="POST" action="{{ route('password.confirm') }}">
                @csrf
                <div class="input-group mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block">Confirm Password</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
