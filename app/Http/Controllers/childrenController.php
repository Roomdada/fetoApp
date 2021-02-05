<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\childrenResource;
use App\Models\Children;
use Illuminate\Http\Request;

class childrenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return userResource::collection(Children::orderByDesc('created_at')->with('organisation','user')->get());

    }

    /**
  


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $child = Children::create($request->all());
        if ($child) {
            return response()->json(['success'=>'creation de nouveau enfant avec success'],200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $child)
    {
        return  Children::with('organisation','user')->firstWhere('id',$child);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chidlren $child)
    {
        if($child->update($request->all()))
        {
            return response()->json(['success'=>"Enfant modifié avec success"],200);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Children $child)
    {
         $req = $child->delete();
        if ($req) {
            return response()->json(['success'=>'Enfant supprimé avec success'],200);
            
        }

        else 
            abord(500);
    
    }
}
