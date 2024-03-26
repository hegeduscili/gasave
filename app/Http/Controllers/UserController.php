<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Hash;
use App\Models\BirthData;


class UserController extends Controller
{
    function register(RegisterRequest $request)
    {

        $validated = $request->validate(Config::get('userdata.basic'));

        $validated['password'] = bcrypt($validated['password']);

        User::create($validated);

        return redirect()->route('login')->with('success', __('Successfully Registered!'));
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

        Config::set('userdata.basic.email', Config::get('userdata.basic.email') . ',' . Auth::user()->id);

        Config::set('userdata.basic.password', 'nullable|min:3|max:20|confirmed');

        $validated = $request->validate(Config::get('userdata.basic'));

        $user->update($request->only(['name', 'email']));

        if ($request->password) {
            $hashedPassword = Hash::make($request->password);
            $user->update(['password' => $hashedPassword]);
        }
        return redirect()->back()->with('success', __('Successful modification!'));
    }

    function birthdataProcess(Request $request)
    {

        $validated = $request->validate(Config::get('userdata.information'));

       // User::find(Auth::user()->id)->birthdata()->create($validated);

       BirthData::updateOrCreate(['user_id' => Auth::user()->id], $validated);

       return redirect()->back()->with('success', __('Operation successful!'));
    }
}
