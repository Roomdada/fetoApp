<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\casResource;
use App\Models\Cas;
use Illuminate\Http\Request;


class casController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return casResource::collection(Cas::orderByDesc('created_at')->with('organisation','castype')->get());
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
      public function store(Request $request)
    {
        $cas = Cas::create($request->all());
        if ($cas) {
            return response()->json(['success'=>'creation de nouveau cas avec success'],200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $cas)
    {
        return  Cas::with('organisation','castype')->firstWhere('id',$cas);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cas $cas)
    {
        if($cas->update($request->all()))
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
    public function destroy(Cas $cas)
    {
         $req = $cas->delete();
        if ($req) {
            return response()->json(['success'=>'cas supprimé avec success'],200);
            
        }

        else 
            abord(500);
    
    }
}
