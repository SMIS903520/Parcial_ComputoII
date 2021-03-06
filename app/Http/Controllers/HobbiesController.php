<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hobby;
use App\Http\Resources\Hobby as HobbyResource;

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
        $hobbiess = Hobby::all();
        return HobbyResource::collection($hobbiess);
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
        $hobby = $request->isMethod('put') ? Hobby::findOrFail($request->id) : new Hobby;
        $hobby->id = $request->input('id');
        $hobby->name = $request->input('name');
        $hobby->hobby = $request->input('hobby');
        $hobby->sports = $request->input('sports');

        if($hobby->save()){
            return new HobbyResource($hobby);
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
        $hobby = hobby::findOrFail($id);
        //return data category
        return new hobbyResource($hobby);
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
        $hobby = Hobby::findOrFail($id);

        //
         //delete 
         if($hobby->delete()){
            return new HobbyResource($hobby);
        }
    }
}
