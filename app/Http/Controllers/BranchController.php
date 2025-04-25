<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $branchs = DB::table('branches')
        ->get();

        return view('branch.index', ['branchs' => $branchs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $branchs = DB::table('branches')
        ->orderBy('name')
        ->get();

        return view('branch.new', ['branchs'=>$branchs]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $branch = new Branch();
        $branch->name = $request->branch;
        $branch->address = $request->address;
        $branch->save();

        $branchs = DB::table('branches')
        ->get();

        return view('branch.index', ['branchs' => $branchs]);
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
        $branch = Branch::find($id);

        $branchs = DB::table('branches')
        ->orderBy('name')
        ->get();

        return view('branch.edit', ['branch'=>$branch, 'branchs'=>$branchs]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $branch = Branch::find($id);

        $branch->name = $request->branch;
        $branch->address = $request->address;
        $branch->save();

        $branchs = DB::table('branches')
        ->get();

        return view('branch.index', ['branchs'=>$branchs]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $branch = Branch::find($id);
        $branch->delete();

        $branchs = DB::table('branches')
        ->get();

        return view('branch.index', ['branchs'=>$branchs]);
    }
}
