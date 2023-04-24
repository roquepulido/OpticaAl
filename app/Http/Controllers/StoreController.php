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
        return View('stores.index', ["stores" => $stores,]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return View("stores.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $store = Store::find($id);
        return $store;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $store = Store::find($id);
        $store->name = $request->name;
        $store->last_name = $request->last_name;
        $store->phone = $request->phone;
        $store->email = $request->email;
        $store->diagnostic_id = $request->diagnostic_id;

        $store->save();
        return redirect()->route("stores.index")->with(["status" => "Registro Actualizado"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $store = Store::find($id);
        $store->delete();
        return "ok";
    }
}
