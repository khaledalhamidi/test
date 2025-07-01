<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Console\View\Components\Task as ComponentsTask;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //return all data    v                                                                                                                                                                                                                                                                                    
       $task= task::all();
        return response()->json($task);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
       $validateDate= $request->validate(
            [
               'title'=>'required |String |max:40',
                'description'=>'nullable|required |String |max:40',
                'priorty'=>'required |integer |min:1|max:5',
            ]
            );
            $task=Task::create($validateDate);
                return response()->json($task,200);



// store without validation

    //    $task= task::create(
    //         [
    //             'title'=>$request->title,
    //             'description'=>$request->description,
    //             'priorty'=>$request->priority
    //         ]
    //         );
    //     return response()->json($task,200);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
       $task= task::find($id);
      return response()->json($task,200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $task=task::findorfail($id);
         $validateDate= $request->validate(
            [
               'title'=>'String |max:40',
                'description'=>'required |String |max:40',
                'priorty'=>'integer |min:1|max:5',
            ]
            );
        $task->update($validateDate);
     return response()->json($task,201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
       $task= Task::findorfail($id);
       $task->delete();
   return response()->json($task,201);
    }
}
