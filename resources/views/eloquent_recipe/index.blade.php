@extends('layouts.main')

@section('title', 'Recipes')

@section('content')
<br/>
<h2>Recipes</h2>
<br/>

{{-- @can('create', App\Models\Album::class) --}}
<div class="text-end mb-3">
    <a href="{{ route('eloquent_recipe.create') }}" class="btn btn-outline-primary btn-sm">New Recipe</a>
</div>
{{-- @endcan --}}

<div class="container">
    @foreach($recipes as $recipe)
        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="card">
                    <img class="card-img-top" src="" alt="">

                    <div class="card-body">
                        <h5 class="card-title">Recipe: {{ $recipe->name }}</h5>
                        <p class="card-text">
                            Cuisine: {{ $recipe->cuisine->cuisine }}
                        </p>
                        <p class="card-text">
                            Created By: {{ $recipe->user->name }}
                        </p>
                        <a href="{{ route('eloquent_recipe.edit', ['id' => $recipe->id]) }}" class="btn btn-outline-primary btn-sm">
                            Edit
                        </a>
                        <form action="/eloquent/recipes/{{ $recipe->id }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                
                            <button class="btn btn-outline-primary btn-sm">Delete Recipe</button>
                        </form>
                        <a href="#" class="btn btn-outline-secondary btn-sm">
                            <i class="far fa-heart"></i></a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>





{{--
<table class="table table-striped">
    <thead>
        <tr>
            <th>Recipe</th>
            <th>Cuisine</th>
            <th>Created By</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($recipes as $recipe)
            <tr>
                <td>
                    {{ $recipe->name }}
                </td>
                <td>
                    {{ $recipe->cuisine->cuisine }}
                </td>
                <td>
                    {{ $recipe->user->name }}
                </td>
                <td>
                    @can('update', $recipe)
                    <a href="{{ route('eloquent_recipe.edit', ['id' => $recipe->id]) }}">
                        Edit
                    </a>
                    <a href="{{ route('eloquent_recipe.delete', ['id' => $recipe->id]) }}">
                        Delete
                    </a>
                    <form action="/eloquent/recipes/{{ $recipe->id }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
            
                        <button>Delete Recipe</button>
                    </form>
                    @endcan
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
--}}




@endsection