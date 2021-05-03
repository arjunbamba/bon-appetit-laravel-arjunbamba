<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegistrationController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|min:5',
        ]);

        try {
            $user = new User();
            $user->name = $request->input('name'); //refers to name attribute in form i.e. name="name" in form
            $user->email = $request->input('email');
            $user->password = Hash::make($request->input('password')); //encrypts pw using algorithm called bcrypt
            
            $user->save();

            //Use Auth class to login and keep track of user in session
            Auth::login($user);
            return redirect()->route('profile.index');
        }
        catch(\Exception $e) {
            // do task when error
            // echo $e->getMessage();   // insert query
            return redirect()->route('registration.index')->with('error', 'There was an error creating your account. This user likely already has an account. Please try again with different new credentials.');
        }
    }
}
