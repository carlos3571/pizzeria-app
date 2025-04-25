<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IngredientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $ingredients = DB::table('ingredients')
        ->get();

        return view('ingredient.index', ['ingredients'=>$ingredients]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $ingredients = DB::table('ingredients')
        ->orderBy('name')
        ->get();

        return view('ingredient.new', ['ingredients'=>$ingredients]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $ingredient = new Ingredient();
        $ingredient->name = $request->ingredient;
        $ingredient->save();

        $ingredients = DB::table('ingredients')
        ->get();

        return view('ingredient.index', ['ingredients' => $ingredients]);
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
        $ingredient = Ingredient::find($id);

        $ingredients = DB::table('ingredients')
        ->orderBy('name')
        ->get();

        return view('ingredient.edit', ['ingredient'=>$ingredient, 'ingredients'=>$ingredients]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $ingredient = Ingredient::find($id);

        $ingredient->name = $request->ingredient;
        $ingredient->save();

        $ingredients = DB::table('ingredients')
        ->get();

        return view('ingredient.index', ['ingredients'=>$ingredients]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $ingredient = Ingredient::find($id);
        $ingredient->delete();

        $ingredients = DB::table('ingredients')
        ->get();

        return view('ingredient.index', ['ingredients'=>$ingredients]);
    }
}
