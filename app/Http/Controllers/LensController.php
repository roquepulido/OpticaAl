<?php

namespace App\Http\Controllers;

use App\Models\Lens;
use Illuminate\Http\Request;

class LensController extends Controller
{
    public function index()
    {
        // $lenses = Lens::all();
        return View('test', ["page" => "Micas"]);
    }
}