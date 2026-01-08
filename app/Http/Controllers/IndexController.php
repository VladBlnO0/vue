<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class IndexController extends Controller
{
  public function index()
  {
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
