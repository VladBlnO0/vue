<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
  public function index()
  {
    return inertia(
      'Listing/IndexPage',
      [
        'message' => 'Hello'
      ]
    );
  }

  public function show()
  {
    return inertia('Listing/ShowPage');
  }
}
