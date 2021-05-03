<?php

namespace App\Http\Controllers;

use App\Models\Bookmark;
use App\Models\Cuisine;
use App\Models\Recipe;
use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class EloquentRecipeController extends Controller
{
    public function index() {

        $recipes = Recipe::with('cuisine')
            ->with('user')
            ->join('cuisines', 'cuisines.id', '=', 'recipes.cuisine_id')
            ->join('users', 'users.id', '=', 'recipes.user_id')
            ->orderBy('cuisines.cuisine')
            ->orderBy('name')
            ->get([
                'recipes.*',
                'cuisines.id AS cuisine_id', 
                'users.id AS user_id',
            ]);

        return view('eloquent_recipe.index', [
            'recipes' => $recipes,
        ]);
    }

    public function create() {

        $cuisines = Cuisine::orderBy('cuisine')->get();

        return view('eloquent_recipe.create', [
            'cuisines' => $cuisines,
        ]);
    }

    public function store(Request $request) {

        // If you want to add more rules, can separate with pipe. "max" is max characters rule.
        // exists rule means it must exist in artist table in id column
        $request->validate([
            'cuisine' => 'required|exists:cuisines,id',
            'name' => 'required|max:75',
            'ingredients' => 'required',
            'instructions' => 'required|min:15',
        ]);

        $cuisine = Cuisine::find($request->input('cuisine'));

        $recipe = new Recipe();
        $recipe->name = $request->input('name');
        $recipe->cuisine()->associate($cuisine);
        $user = User::find(Auth::user()->id);
        $recipe->user()->associate($user);
        $recipe->ingredients = $request->input('ingredients');
        $recipe->instructions = $request->input('instructions');
        $recipe->save();

        return redirect()
            ->route('eloquent_recipe.index')
            ->with('success', "Successfully added your recipe for {$request->input('name')} to our catalogue!");
    }

    public function edit($id) {
        $cuisines = Cuisine::orderBy('cuisine')->get();
        $recipe = Recipe::find($id);
        
        // $this->authorize('update', $recipe);

        return view('eloquent_recipe.edit', [
            'cuisines' => $cuisines,
            'recipe' => $recipe,
        ]);
    }

    public function bookmark($id) {
        $bookmark = new Bookmark();

        $user = User::find(Auth::user()->id);
        $bookmark->user()->associate($user);

        $recipe = Recipe::find($id);
        $bookmark->recipe()->associate($recipe);

        $bookmark->save();
        
        // $this->authorize('update', $recipe);

        return redirect()
            ->route('eloquent_recipe.index')
            ->with('success', "Successfully bookmarked the ".$recipe->name." recipe! You can now view it in your profile.");
    }

    public function destroy($id) {

        // $result=Recipe::where('id',$id)->delete();
        $recipe = Recipe::find($id);
        $ToBeDeleted = $recipe->name;
        $recipe->delete();
        return redirect()
            ->route('eloquent_recipe.index')
            ->with('success', "Successfully deleted the ".$ToBeDeleted." recipe from our catalogue!");
    }

    public function update($id, Request $request) {
        $request->validate([
            'cuisine' => 'required|exists:cuisines,id',
            'name' => 'required|max:75',
            'ingredients' => 'required',
            'instructions' => 'required|min:15',
        ]);

        $cuisine = Cuisine::find($request->input('cuisine'));

        $recipe = Recipe::find($id);
        // $this->authorize('update', $album);
        $recipe->name = $request->input('name');
        $recipe->cuisine()->associate($cuisine);
        $recipe->ingredients = $request->input('ingredients');
        $recipe->instructions = $request->input('instructions');
        $recipe->save();

        return redirect()
            // ->route('eloquent_recipe.edit', [ 'id' => $id ])
            ->route('eloquent_recipe.index')
            ->with('success', "Successfully updated the recipe for {$request->input('name')} in our catalogue!");
    }


    public function view($id) {
        $recipe = Recipe::find($id);

        return view('eloquent_recipe.view', [
            'recipe' => $recipe,
        ]);
    }
}
