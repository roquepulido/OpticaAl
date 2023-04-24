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
        $store = Store::create([
            "name" => $request->name,
            "street" => $request->street,
            "number" => $request->number,
            "suburb" => $request->suburb,
            "city" => $request->city,
            "postcode" => $request->postcode,
            "state" => $request->state,
            "stateAbbr" => $request->stateAbbr,
            "phone" => $request->phone,
            "email" => $request->email,
        ]);
        return redirect()->route("stores.index")->with(["status" => "Registro Creado"]);
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
        $store->street = $request->street;
        $store->suburb = $request->suburb;
        $store->city = $request->city;
        $store->postcode = $request->postcode;
        $store->state = $request->state;
        $store->stateAbbr = $request->stateAbbr;
        $store->phone = $request->phone;
        $store->email = $request->email;
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
