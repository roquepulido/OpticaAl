<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class StoreController extends Controller
{
    //
    public function index()
    {
        $stores = Store::all();
        return View('test', ["stores" => $stores]);
    }
}
