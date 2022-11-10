<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $id=$request->briefs_id;
        $task = Brief::find($id)->tasks;
        return view('task.index',compact('task',"id"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $id = $request->briefs_id;
        view('task.create',compact("id"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $task = new Task();
        $task->task_name =$request->taskName;
        $task->start_date =$request->startDate;
        $task->end_date =$request->endDate;
        $task->briefs_id =$request->id_brief;
        // $task = Task::create([
        //     "task_name" => $request->taskName,
        //     "start_date"=>$request->startDate,
        //     "end_date"=>$request->endDate,
        //     "briefs_id"=>$request->briefsId

        // ]);
        //  dd($task);
        // $task->save();
        return redirect('brief/'.$request->id_brief.'/edit' );

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
        $task = Task::find($id);
        $briefs_id = $task->briefs_id;
        return view("task.edit",compact("task","briefs_id"));
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
    }
}
