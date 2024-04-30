<?php

namespace App\Http\Controllers;

use App\Models\Condominium;
use Illuminate\Http\Request;

class CondominiumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$condominiums = Condominium::query()->paginate('5');
        $condominiums = Condominium::all();

        return view('Condominium.condominiums-management', compact('condominiums'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        //$condominiums = Condominium::query()->paginate('5');
        $condominiums = Condominium::all();
        return view('Condominium.New-Condominium', compact('condominiums'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $condominium = new Condominium();
        $condominium->name = ucwords($request->condominium);
        $condominium->save();

        return redirect()->back();
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
