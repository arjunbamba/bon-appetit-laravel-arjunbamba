<?php

namespace App\Http\Controllers;

use App\Models\Bookmark;
use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $bookmarks = Bookmark::with('recipe')
            ->with('user')
            ->join('recipes', 'recipes.id', '=', 'bookmarks.recipe_id')
            ->join('users', 'users.id', '=', 'bookmarks.user_id')
            ->orderBy('bookmarks.created_at')
            // ->orderBy('recipes.cuisine')
            // ->orderBy('name')
            ->get([
                'bookmarks.*',
                'recipes.id AS recipe_id', 
                'users.id AS user_id',
            ]);

        return view('profile.index', [
            //retrieve logged in user
            'user' => Auth::user(),
            'bookmarks' => $bookmarks,
        ]);
    }

    public function removeBookmark($id) {

        // $result=Recipe::where('id',$id)->delete();
        $bookmark = Bookmark::find($id);
        $recipe = Recipe::find($bookmark->recipe->id);
        $ToBeDeleted = $recipe->name;
        $bookmark->delete();
        return redirect()
            ->route('profile.index')
            ->with('success', "Successfully removed the bookmark for the ".$ToBeDeleted." recipe!");
    }

}
