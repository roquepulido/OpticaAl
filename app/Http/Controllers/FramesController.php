<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Frames;

class FramesController extends Controller
{
    public function index()
    {
        // $frames = Frames::all();
        return View('test', ["page" => "Armazones"]);
    }
}
