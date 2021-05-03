@extends('layouts.main')

@section('title', 'Profile')

@section('content')
    <br/>
    <h2>Profile</h2>
    <br/>
    <p>Hello, {{ $user->name }}. Your email is {{ $user->email }}.</p>
@endsection