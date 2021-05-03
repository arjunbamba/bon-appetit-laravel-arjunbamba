@extends('layouts.main')

@section('title', 'Profile')

@section('content')
    <br/>
    <h2>Welcome to your profile, {{ $user->name }}!</h2>
    <br/>
    <p>What do you feel like having today? <br/>Choose from your bookmarks below or browse recipes from under the explore tab to get started!{{--Your email is {{ $user->email }}. --}}</p>
    <br/>
    <h2>Bookmarks</h2>
    <br/>
    <div class="container">
        @foreach($bookmarks as $bookmark)
            {{-- <div class="row"> --}}
                {{-- <div class="col-lg-6 mb-4"> --}}
                    <div class="card text-white bg-info">
                        <img class="card-img-top" src="" alt="">
    
                        <div class="card-body">
                            <h5 class="card-title">Recipe: {{ $bookmark->recipe->name }}</h5>
                            <p class="card-text">
                                Cuisine: {{ $bookmark->recipe->cuisine->cuisine }}
                            </p>
                            <p class="card-text">
                                Created By: {{ $bookmark->recipe->user->name }}
                            </p>
                            <p class="card-text">
                                Bookmark Time: {{ $bookmark->created_at }}
                            </p>
                            <form action="/eloquent/recipes/bookmark/{{ $bookmark->id }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}

                                <button class="btn btn-danger btn-sm">Remove Bookmark</button>
                            </form>
                        </div>
                    </div>
                    <br/>
                {{-- </div> --}}
            {{-- </div> --}}
        @endforeach
    </div>
@endsection