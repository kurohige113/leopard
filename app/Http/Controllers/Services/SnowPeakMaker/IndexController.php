<?php

namespace App\Http\Controllers\Services\SnowPeakMaker;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    protected $viewVars = [];

    public function __invoke(Request $request)
    {
        return view('services.snow-peak-maker.index', $this->viewVars);
    }
}
