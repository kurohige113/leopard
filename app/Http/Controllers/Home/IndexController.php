<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    protected $viewVars = [];

    public function __invoke(Request $request)
    {
        return view('home.index', $this->viewVars);
    }
}
