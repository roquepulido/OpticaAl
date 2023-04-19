<?php

namespace App\Http\Controllers;

use App\Models\KindWork;
use Illuminate\Http\Request;

class KindWorkController extends Controller
{
    public function index()
    {
        $kind = KindWork::all();
        return View('test', ["data" => $kind]);
    }
}
