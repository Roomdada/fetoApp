<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Resources\userResource;


class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return userResource::collection(User::orderByDesc('created_at')->withCount('childrens')->get());

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
        $user = User::create($request->all());
        if ($user) {
            return response()->json(['success'=>'creation de nouveau donateur avec success'],200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $user)
    {
        return  User::with('childrens')->withCount('childrens')->firstWhere('id',$user);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        if($user->update($request->all()))
        {
            return response()->json(['success'=>"Utilisateur $user->firstname modifié avec success"],200);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(user $user)
    {
         $req = $user->delete();
        if ($req) {
            return response()->json(['success'=>'Utilisateur supprimé avec success'],200);
            
        }

        else 
            abord(500);
    
    }




}
