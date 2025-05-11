<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;

class UserController extends Controller {
    public function login(LoginRequest $request): RedirectResponse {
      $credentials = $request->validated();
      $remember = $request->boolean('remember');


      if (!auth()->attempt($credentials, $remember)) {
          return redirect()->back()->withErrors([
            'email' => 'These credentials do not match our records.',
          ])->onlyInput('email');
      }
      $request->session()->regenerate();
      return redirect()->route('home');
    }

    public function register(RegisterRequest $request): RedirectResponse {
      $validatedRequest = $request->validated();

      $user = User::create([
          'first_name' => $validatedRequest['first_name'],
          'last_name' => $validatedRequest['last_name'],
          'email' => $validatedRequest['email'],
          'password' => bcrypt($validatedRequest['password']),
      ]);

      auth()->login($user);
      return redirect()->route('home');
    }

    public function logout(): RedirectResponse {
      auth()->logout();
      return redirect()->route('home');
    }
}
