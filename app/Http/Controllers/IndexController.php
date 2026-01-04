<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class IndexController extends Controller
{
  public function index()
  {
    dd(Listing::where('beds', '>=', 4)->orderBy('price', 'asc')->first());

    return inertia(
      'Index/index-page',
      [
        'message' => 'Hello'
      ]
    );
  }

  public function show()
  {
    return inertia('Index/show-page');
  }
}
