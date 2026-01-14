<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
  public function create()
  {
    return inertia('Auth/Login');
  }
  public function store(Request $request)
  {
    if (
      !Auth::attempt($request->validate([
        'email' => 'required|email|string',
        'password' => 'required|string'
      ]), true)
    ) {
      throw ValidationException::withMessages([
        'email' => 'The credentials are incorrect'
      ]);
    }
    $request->session()->regenerate();
    return redirect()->intended('/listing');
  }
  public function destroy(Request $request)
  {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect()->route('listing.index');
  }
}
