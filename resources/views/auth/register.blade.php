@extends('layouts.main')

@section('title', 'Register')

@section('content')
    <br/>
    <h2>Register</h2>
    <br/>
    {{--original: <a href="/login">--}}
    <p>Already have an account? Please <a href="{{ route('auth.loginForm') }}">login</a>.</p>

    <div class="container">
        <form method="post" action="{{ route('registration.create') }}">
            @csrf
            <div class="mb-3">
                <label class="form-label" for="name">Full Name*</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}">
                @error('name')
                    <small class="text-warning">{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label" for="email">Email*</label>
                <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}">
                @error('email')
                    <small class="text-warning">{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label" for="password">Password* (at least 5 characters long)</label>
                <input type="password" id="password" name="password" class="form-control" value="{{ old('password') }}">
                @error('password')
                    <small class="text-warning">{{$message}}</small>
                @enderror
            </div>
            <input type="submit" value="Register" class="btn btn-primary">
        </form>
    </div>
@endsection