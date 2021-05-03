@extends('layouts.main')

@section('title', 'New Recipe')

@section('content')
    <br/>
    <h2>New Recipe</h2>
    <br/>
    <div class="container">
        <form action="{{ route('eloquent_recipe.store')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="cuisine" class="form-label">Cuisine (required):</label>
                <br/>
                <select name="cuisine" id="cuisine" class="form-select">
                    <option value="">-- Select Cuisine --</option>
                    @foreach($cuisines as $cuisine)
                        <option 
                            value="{{$cuisine->id}}" 
                            {{ (string) $cuisine->id === old('cuisine') ? "selected" : "" }}
                        >
                                {{$cuisine->cuisine}}
                        </option>
                    @endforeach
                </select>
                <br/>
                @error('cuisine')
                    <small class="text-warning">{{$message}}</small>
                @enderror
            </div>
            <br/>
            <div class="mb-3">
                <label for="name" class="form-label">Recipe Name (required, max 75 characters):</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
                @error('name')
                    <small class="text-warning">{{$message}}</small>
                @enderror
            </div>
            <br/>
            <div class="mb-3">
                <label for="ingredients" class="form-label">Ingredients (required):</label>
                <input type="text" name="ingredients" id="ingredients" class="form-control" value="{{ old('ingredients') }}">
                @error('ingredients')
                    <small class="text-warning">{{$message}}</small>
                @enderror
            </div>
            <br/>
            <div class="mb-3">
                <label for="instructions" class="form-label">Instructions (required, min 15 characters):</label>
                <input type="text" name="instructions" id="instructions" class="form-control" value="{{ old('instructions') }}">
                @error('instructions')
                    <small class="text-warning">{{$message}}</small>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">
                Save
            </button>
        </form>
    </div>
@endsection