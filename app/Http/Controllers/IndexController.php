<?php

namespace App\Http\Controllers;

class IndexController extends Controller
{
    public function index()
    {
        return inertia(
            'Listing/IndexPage',
            [
                'message' => 'Hello',
            ]
        );
    }

    public function show()
    {
        return inertia('Listing/ShowPage');
    }
}
