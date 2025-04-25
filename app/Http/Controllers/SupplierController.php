<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $suppliers = DB::table('suppliers')
        ->get();

        return view('supplier.index', ['suppliers' => $suppliers]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $suppliers = DB::table('suppliers')
        ->orderBy('name')
        ->get();

        return view('supplier.new', ['suppliers'=>$suppliers]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $supplier = new Supplier();
        $supplier->name = $request->supplier;
        $supplier->contact_info = $request->contact_info;
        $supplier->save();

        $suppliers = DB::table('suppliers')
        ->get();

        return view('supplier.index', ['suppliers' => $suppliers]);
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
        $supplier = Supplier::find($id);

        $suppliers = DB::table('suppliers')
        ->orderBy('name')
        ->get();

        return view('supplier.edit', ['supplier'=>$supplier, 'suppliers'=>$suppliers]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $supplier = Supplier::find($id);

        $supplier->name = $request->supplier;
        $supplier->contact_info = $request->contact_info;
        $supplier->save();

        $suppliers = DB::table('suppliers')
        ->get();

        return view('supplier.index', ['suppliers'=>$suppliers]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $supplier = Supplier::find($id);
        $supplier->delete();

        $suppliers = DB::table('suppliers')
        ->get();

        return view('supplier.index', ['suppliers'=>$suppliers]);
    }
}
