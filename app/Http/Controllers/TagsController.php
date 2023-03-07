<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Tags;

class TagsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {                
        $TagInBrowers = Tags::all();                                
         if (is_null($TagInBrowers)){
            return response()->json(['Message' => 'Registro no encontrado'],404);
        }            
        return response()->json($TagInBrowers); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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

    public function VIewTag (string $id) {
        //$TagInBrowers = Tags_Association::find($id);                        
        $idBrow= null;   
        $tagName= null;
        $TagInBrowers = Tags::where('id', '=',$id)->get();
        if (is_null($TagInBrowers)){
            return response()->json(['Message' => 'Registro no encontrado'],404);
        }            
        
        foreach ($TagInBrowers as $As) {                    
           $idBrow = $As->id;
           $tagName = $As->nombre;    
        }        

if (is_null($tagName)){
            return response()->json(['Message' => 'Registro no encontrado'],404);
        }            
        return response()->json($tagName);            
    }
}
