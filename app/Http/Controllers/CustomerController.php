<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Diagnostic;
use Illuminate\Http\Request;

/*
 "name", "last_name", "phone", "email", "treatment_id"
*/

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Customer::all();
        return View('customers.index', ["customers" => $customers]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $diags = Diagnostic::all();
        return View('customers.create', ["diags" => $diags]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Customer::create([
            "name" => $request->name,
            "last_name" => $request->last_name,
            "phone" => $request->phone,
            "email" => $request->email,
            "diagnostic_id" => $request->diagnostic_id
        ]);
        return redirect()->route("customers.index")->with(["status" => "Cliente Creado"]); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}