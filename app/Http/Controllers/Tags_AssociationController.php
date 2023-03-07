<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Tags_Association;
use App\Http\Controllers\TagsController;

class Tags_AssociationController extends Controller
{

    private $TagsController;

    public function __construct(TagsController $TagsController)
    {
        $this->TagsController = $TagsController;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {         
         $data= null;        
         $TagInBrowers = Tags_Association::all();
         
         if (is_null($TagInBrowers)){
             return response()->json(['Message' => 'Registro no encontrado'],404);
         }            
         
         foreach ($TagInBrowers as $As) {                    
            $idBrow = $As->id;
            $tag = $As->id_tags;
 
            $tag = explode(',', $tag);
            for ($i = 0; $i < 4; $i++){
            //$tag[$i]= TagsController->VIewTag($tag[$i]);             
             }
             $data = [
                 $idBrow,
                 $tag[0],
                 $tag[1],
                 $tag[2],
                 $tag[3]
             ]; 
         }


 if (is_null($data)){
             return response()->json(['Message' => 'Registro no encontrado'],404);
         }            
         return response()->json($data);            
     }    
    /**
     * Show the form for creating a new resource.
     */
    public function create(string $parameter1, string $parametre2, string $parametre3, string $parametre4)
    {
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $registro = new Registro;
        $register = $request->input('campo2') . ',' . input('campo3')  . ',' . input('campo4')  . ',' . input('campo5')  ;
        $registro->campo1 = $request->input('campo1');
        $registro->campo2 = $request->input(register);        
        $registro->save();
        return response()->json(['message' => 'Registro guardado correctamente']);                
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

    public function VIewRegister (string $id) {
        //$TagInBrowers = Tags_Association::find($id);        
        $data= null;
        $TagInBrowers = Tags_Association::where('id', '=',$id)->get();
        if (is_null($TagInBrowers)){
            return response()->json(['Message' => 'Registro no encontrado'],404);
        }            
        
        foreach ($TagInBrowers as $As) {                    
           $idBrow = $As->id;
           $tag = $As->id_tags;

           $tag = explode(',', $tag);
            $data = [
                $id,
                $tag[0],
                $tag[1],
                $tag[2],
                $tag[3]
            ]; 
        }        
if (is_null($data)){
            return response()->json(['Message' => 'Registro no encontrado'],404);
        }            
        return response()->json($data);            
    }
}
