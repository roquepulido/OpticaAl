<?php

namespace App\Http\Controllers;

use App\Models\Diagnostic;
use Illuminate\Http\Request;

class DiagnosticController extends Controller
{
    public function index()
    {
        // $diag = Diagnostic::all();
        return View('test', ["page" => "Diagnostico"]);
    }
}
