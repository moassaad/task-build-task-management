<?php

namespace App\Http\Controllers;

use App\Http\Requests\Task\TaskRequest;
use App\Models\Task;
use Auth;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $tasks = Task::where(['user_id'=>$user->id])
            ->orderBy('created_at','desc')->get();
        return view('task.index',compact(['tasks']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('task.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TaskRequest $request)
    {
        $valid = $request->validated();
        $completion = (isset($valid['completion']))? true : false;
        Task::create([
            'title'=>$valid['title'],
            'description'=>$valid['description'],
            'completion'=>$completion,
            'user_id'=>Auth::user()->id
        ]);
        return redirect()
            ->route('task.index')
            ->with('success','success add new task!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        return view('task.edit',compact('task'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TaskRequest $request, Task $task)
    {
        $valid = $request->validated();
        $completion = (isset($valid['completion']))? true : false;
        $task->title = $valid['title'];
        $task->description = $valid['description'];
        $task->completion = $completion;
        $task->update();
        return redirect()
            ->route('task.index')
            ->with('success','success update task!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $check = $task->delete();
        if($check)
        {
            return redirect()
                ->route('task.index')
                ->with('success','success deleted task.');
        }
    }
}
