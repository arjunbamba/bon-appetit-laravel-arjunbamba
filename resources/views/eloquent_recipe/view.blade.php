@extends('layouts.main')

@section('title')
    View: {{ $recipe->name }}
@endsection

@section('content')
    <br/>
    <h2>View: {{ $recipe->name }}</h2>
    <br/>

    <div class="container">
        <div class="card text-white bg-primary">
            <img class="card-img-top" src="" alt="">
    
            <div class="card-body">
                <h5 class="card-title">Recipe: {{ $recipe->name }}</h5>
                <p class="card-text">
                    Cuisine: <br/>{{ $recipe->cuisine->cuisine }}
                </p>
                <p class="card-text">
                    Ingredients: <br/>{{ $recipe->ingredients }}
                </p>
                <p class="card-text">
                    Instructions: <br/>{{ $recipe->instructions }}
                </p>
                <p class="card-text">
                    Created By: <br/>{{ $recipe->user->name }}
                </p>
                <p class="card-text">
                    Created Time: <br/>{{ $recipe->created_at }}
                </p>
            </div>
        </div>
    </div>
    
@endsection