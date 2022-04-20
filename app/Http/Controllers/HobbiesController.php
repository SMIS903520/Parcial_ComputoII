<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\hobby;
use App\Http\Resources\hobbies as hobbiesResource;

class HobbiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $hobbies = hobbies::all();
        return hobbiesResource::collection($hobbies);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $hobby = $request->isMethod('put') ? hobbies::findOrFail($request->id) : new hobbies;
        $hobby->id = $request->input('id');
        $hobby->name = $request->input('name');
        $hobby->age = $request->input('age');
        $hobby->hobby = $request->input('hobby');
        $hobby->sports = $request->input('sports');

        if($Hobby->save()){
            return new hobbiesResource($hobby);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $hobby = hobbies::findOrFail($id);
        //return data category
        return new hobbiesResource($hobby);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
         //delete 
         if($hobby->delete()){
            return new hobbiesResource($hobby);
        }
    }
}
