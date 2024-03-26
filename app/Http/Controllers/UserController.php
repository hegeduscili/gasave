<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    function register(RegisterRequest $request)
    {

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:4|confirmed',
        ]);

        $validated['password'] = bcrypt($validated['password']);

        User::create($validated);

        return redirect()->route('profile')->with('success', __('Successfully Registered'));
    }

    function login(LoginRequest $request)
    {

        $validated = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        $result = Auth::attempt($validated);

        if ($result == true) {
            return redirect()->route('profile')->with('success', __('Successfully Logged in!'));
        } else {
            return redirect()->back()->with('error', __('Login failed'));
        }
    }

    function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('')->route('home');
    }

    function profileProcess(Request $request)
    {
        $user = User::find(Auth::user()->id);

        Config::set('userdata.email', Config::get('userdata.email') . ',' . Auth::user()->id);

        Config::set('userdata.password', 'nullable|min:3|max:20|confirmed');

        $validated = $request->validate(Config::get('userdata'));

        $user->update($request->only(['name', 'email']));

        if ($request->password) {
            $hashedPassword = Hash::make($request->password);
            $user->update(['password' => $hashedPassword]);
        }
        return redirect()->back()->with('success', __('Successful modification!'));
    }
}
