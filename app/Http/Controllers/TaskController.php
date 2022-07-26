<?php

namespace App\Http\Controllers;

use App\Models\task;
use App\Models\User;
use App\Models\Client;
use App\Http\Requests\StoretaskRequest;
use App\Http\Requests\UpdatetaskRequest;
use App\Models\Project;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::with(['client', 'user', 'project'])->get();

        return view('admin.tasks.index', compact('tasks'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();

        $clients = Client::all();

        $projects = Project::all();

        return view('admin.tasks.create', compact('users', 'clients', 'projects'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoretaskRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoretaskRequest $request)
    {
        Task::create($request->validated());
        return redirect()->route('admin.tasks.index')->with('success', 'Tarea creada exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(task $task)
    {
        $users = User::all();

        $clients = Client::all();

        $projects = Project::all();

        return view('admin.tasks.edit', compact('users', 'clients', 'projects', 'task'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetaskRequest  $request
     * @param  \App\Models\task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatetaskRequest $request, task $task)
    {
        $task->update($request->validated());

        return redirect()->route('admin.tasks.index')->with('success', 'Tarea editada exitosamente');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(task $task)
    {
        $task->delete();

        return back();
    }
}
