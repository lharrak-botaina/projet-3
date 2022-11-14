<?php

namespace App\Http\Controllers;

use App\Models\Brief;
use Illuminate\Http\Request;

class BriefController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $briefs = Brief::all();
        return view('brief.index',compact('briefs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('brief.create');
    }

    
    public function store(Request $request)
    {
        $brief =Brief::create([
            'brief_name'=>$request->brief_name,
            'delivery_date'=>$request->delivery_date,
            'recuperation_date'=>$request->recuperation_date
        ]);
        return redirect()->route('brief.index');
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
        $brief= Brief::find($id);
        $tasks = Brief::find($id)->tasks;
        return view('brief.edit',compact('brief','tasks') );
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
        $brief = Brief::where('id',$id)->update([
            'brief_name'=>$request->brief_name,
            'delivery_date'=>$request->delivery_date,
            'recuperation_date'=>$request->recuperation_date
        ]);
        return redirect()->route('brief.index');
        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brief=Brief::where('id',$id)->delete();
        return redirect()->route('brief.index');
    }
}
