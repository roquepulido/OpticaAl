<?php

namespace App\Http\Controllers;

use App\Models\Lab;
use Illuminate\Http\Request;

class LabController extends Controller
{
    public function index()
    {
        $labs = Lab::all();
        return View('test', ["data" => $labs]);
    }
}
