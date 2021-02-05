<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\typeResource;
use App\Models\Type;
use Illuminate\Http\Request;

class typeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return typeResource::collection(Type::orderByDesc('created_at')->with('organisations')->get());
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
      public function store(Request $request)
    {
        $type = Type::create($request->all());
        if ($type) {
            return response()->json(['success'=>'creation de nouveau type de structure avec success'],200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $type)
    {
        return  Type::with('organisations')->firstWhere('id',$type);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Type $type)
    {
        if($type->update($request->all()))
        {
            return response()->json(['success'=>"Cas modifié avec success"],200);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Type $type)
    {
         $req = $type->delete();
        if ($req) {
            return response()->json(['success'=>'type supprimé avec success'],200);
            
        }

        else 
            abord(500);
    
    }

}   
