<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    // 
    $tasks = Task::all();
   
    return view('Task', compact('tasks'));
    }
    //  public function edit(Task $task)
    //  {
    //      return view('Task', compact('task'));
    //  }
 
     // Update task
     public function update(Request $request, Task $task)
     {
         $request->validate([
             'title' => 'required|string|max:255',
             'start' => 'required|date',
             'end' => 'required|date',
         ]);
 
         $task->title = $request->title;
         $task->save();
 
         return redirect()->route('Task')->with('success', 'Task updated successfully.');
     }
 
     // Delete task
     public function destroy(Task $task)
     {
         $task->delete();
         return 
         redirect()->route('Task')->with('success', 'Task deleted successfully.');
     }
 
     // Share task
     public function share(Task $task)
     {
         // Logic for sharing the task (e.g., sharing a link, email, etc.)
         return response()->json([
             'message' => 'Task shared successfully!',
             'task' => $task
         ]);
     }
   
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'start' => 'required|date',
            'end' => 'required|date',
        ]);

        Task::create(['title' => $request->title,
        'start' => $request->start,
        'end' => $request->end,]);

        return redirect()->route('Task')->with('success', 'Task created successfully!');
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
   

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        //
    }

}
