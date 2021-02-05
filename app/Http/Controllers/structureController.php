<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\structureResource;
use App\Models\Organisation;
use Illuminate\Http\Request;

class structureController extends Controller
{
    public function index()
    {
         return structureResource::collection(Organisation::orderByDesc('created_at')->where('type_id',3)->with('children','type')->get());
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
      public function store(Request $request)
    {
        $structure = Oragnisation::create($request->all());
        if ($structure) {
            return response()->json(['success'=>'creation de nouvelle  structure avec success'],200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $structure)
    {
        return  Organisation::with('type')->firstWhere(['id'=>$structure]);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Organisation $structure)
    {
        if($structure->update($request->all()))
        {
            return response()->json(['success'=>"Structure modifié avec success"],200);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Organisation $structure)
    {
         $req = $structure->delete();
        if ($req) {
            return response()->json(['success'=>'Structure supprimé avec success'],200);
            
        }

        else 
            abord(500);
    
    }
}
