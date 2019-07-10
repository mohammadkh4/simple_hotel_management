<?php

namespace App\Http\Controllers;

use App\Hotel;
use Illuminate\Http\Request;

class HotelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $res = Hotel::all() ;
        return view('index',compact('res')) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create') ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hotel = new Hotel();
        $hotel->manager_id = $request->manager_id ;
        $hotel->stars = $request->stars ;
        $hotel->name = $request->name ;
        $hotel->city_id = $request->city_id ;
        $hotel->save() ;
        return redirect()->route('hotels.index') ;


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
        $res = Hotel::findorfail($id) ;
        return view('edit',compact('res')) ;
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
        $hotel = Hotel::findorfail($id) ;
        $hotel->manager_id = $request->manager_id ;
        $hotel->stars = $request->stars ;
        $hotel->name = $request->name ;
        $hotel->city_id = $request->city_id ;
        $hotel->save() ;
        return redirect()->route('hotels.index') ;
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
        $res = Hotel::findorfail($id) ;
        $res->delete() ;
        return redirect()->route('hotels.index') ;
    }
}
