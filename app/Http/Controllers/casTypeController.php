<?php

namespace App\Http\Controllers;
use App\Http\Resources\casTypeResource;
use App\Models\CasType;
use Illuminate\Http\Request;

class casTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return casTypeResource::collection(CasType::orderByDesc('created_at')->with('cas')->get());

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
        $cas = CasType::create($request->all());
        if ($cas) {
            return response()->json(['success'=>'creation avec success'],200);
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
        return  CasType::with('cas')->firstWhere('id',$cas);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CasType $cas)
    {
        if($cas->update($request->all()))
        {
            return response()->json(['success'=>"modifié avec success"],200);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(CasType $cas)
    {
         $req = $cas->delete();
        if ($req) {
            return response()->json(['success'=>'suppression avec success'],200);
            
        }

        else 
            abord(500);
    
    }
}
