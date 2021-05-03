@extends('layouts.main')

@section('title')
    Edit Recipe: {{ $recipe->name }}
@endsection

@section('content')
    <br/>
    <h2>Edit Recipe: {{ $recipe->name }}</h2>
    <br/>

    <form action="{{ route('eloquent_recipe.update', [ 'id' => $recipe->id ]) }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="cuisine" class="form-label">Cuisine</label>
            <select name="cuisine" id="cuisine" class="form-select">
                <option value="">-- Select Cuisine --</option>
                @foreach($cuisines as $cuisine)
                    <option 
                        value="{{$cuisine->id}}" 
                        {{ (int) $cuisine->id === (int) old('cuisine', $recipe->cuisine_id) ? "selected" : "" }}
                    >
                            {{$cuisine->cuisine}}
                    </option>
                @endforeach
            </select>
            @error('cuisine')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Recipe Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $recipe->name) }}">
            @error('name')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="ingredients" class="form-label">Ingredients</label>
            <input type="text" name="ingredients" id="ingredients" class="form-control" value="{{ old('ingredients', $recipe->ingredients) }}">
            @error('ingredients')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="instructions" class="form-label">Instructions</label>
            <input type="text" name="instructions" id="instructions" class="form-control" value="{{ old('instructions', $recipe->instructions) }}">
            @error('instructions')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">
            Save
        </button>
    </form>
    
@endsection