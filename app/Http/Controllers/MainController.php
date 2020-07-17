<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class MainController extends Controller
{
    public function index($locals)
    {
        session(['locale' => $locals]);
        App::setLocale($locals);
//        $mainLocale = App::getLocale();
//        dd($mainLocale);
        return redirect()->back();
    }
}
