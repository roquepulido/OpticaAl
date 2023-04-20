<?php

namespace App\Http\Controllers;

use App\Models\Eyeglass;
use Illuminate\Http\Request;

class EyeglassController extends Controller
{
    public function index()
    {
        $eyeglasses = Eyeglass::all();
        return View('test', ["data" => $eyeglasses]);
    }
}
