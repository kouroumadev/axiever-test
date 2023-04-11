<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = auth()->user()->tasks;

        return view('task.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('task.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'name' => ['required', 'string', 'unique:tasks'],
            'status' => ['required', 'string'],

        ]);

        $task = new Task();

        $task->user_id = auth()->user()->id;
        $task->name = $request->name;
        $task->state = 0;
        $task->status = $request->status;

        $task->save();

        return redirect(route('task.create'))->with('yes','Task Added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        // dd($task);
        return view('task.edit', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        $request->validate([
            'name' => ['required', 'string'],
            'status' => ['required', 'string'],

        ]);

        $task->update([

            'name' => $request->name,
            'status' => $request->status,

        ]);

        return redirect(route('task.index'))->with('yes', 'Task updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        $task->delete();

        return redirect(route('task.index'))->with('yes', 'Task deleted successfully');
    }

    function priorityHandler (int $id)
    {
        $task = Task::findOrFail($id);
        $task_state = $task->state;

        $task->update([
            'state' => $task_state == 0 ? 1 : 0
        ]);

        return redirect(route('task.index'))->with('yes', 'Task state changed successfully');

    }

    function sendEmail()
    {
        $details = [
            'title' => 'Mail from abdoul-task-management-app',
            'body' => 'This is remainder for your Urgent task.'
        ];

        \Mail::to(auth()->user()->email)->send(new \App\Mail\MailSender($details));

        dd('Notification sent, Please check your inbox');
    }
}
