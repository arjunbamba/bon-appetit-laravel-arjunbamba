@extends('layouts.main')

@section('title', 'Login')

@section('content') 
    <br/>
    <h2>Login</h2>
    <br/>
    <p>Don't have an account? Please <a href="{{ route('registration.index') }}">register</a>.</p>
    <div class="container">
        <form method="post" action="{{ route('auth.login') }}">
            @csrf
            <div class="mb-3">
                <label class="form-label" for="email">Email*</label>
                <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}">
                @error('email')
                    <small class="text-warning">{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label" for="password">Password*</label>
                <input type="password" id="password" name="password" class="form-control" value="{{ old('password') }}">
                @error('password')
                    <small class="text-warning">{{$message}}</small>
                @enderror
            </div>
            <input type="submit" value="Login" class="btn btn-primary">
        </form>
    </div>
@endsection