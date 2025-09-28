<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /**
     * Handle an authentication attempt.
     */
    public function authenticate(Request $request): RedirectResponse
    {
        Log::debug('A user tried to log in.');
        Log::debug($request->input("email") . " " . $request->input("password"));
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        Log::debug($credentials["email"] . " " . $credentials["password"]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            Log::debug('Login successfull');
            return redirect("");
        }
        Log::debug('Login not successfull');
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
    public function register(Request $request): JsonResponse
    {
        Log::debug('A user tried to register.');
        $user = new User();
        $user->password = Hash::make($request->input('password'));
        $user->email = $request->input(key: 'email');
        $user->name = $request->input('username');
        $user->save();

        $user = User::where("email", $user->email)->first();
        return response()->json([
            'data' => $user,
            'message' => 'Succeed'
        ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
    }

}