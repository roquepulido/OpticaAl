<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function index()
    {
        $sale = Sale::all();
        return View('test', ["data" => $sale]);
    }
}