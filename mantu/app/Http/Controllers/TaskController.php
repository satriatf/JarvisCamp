<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // Mendapatkan dan menampilkan data tugas
    public function index()
    {
        // mendapat tugas dari model
        $tasks = Task::all();
        // dd($tasks);
        return view("task.index",[
            "tasks"=> $tasks
        ]);
    }

    public function list()
    {
        $tasks = Task::all();
        return view('task.list', compact('tasks'));
    }

    public function create()
    {
        return view('task.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $data = $request->validate([
            'name'=>'required|max:100|min:3',
            'deadline'=>'required|date',
            'status'=> 'required|in:Belum Dikerjakan,Sedang Dikerjakan,Selesai',
            'description'=> 'required',
        ]);
        Task::create($data);
            return redirect()->route('tasks.list');
    }

    public function edit(string $id)
    {
        $task = Task::find($id);
        return view('task.edit', compact('task'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'name'=>'required|max:100|min:3',
            'deadline'=>'required|date',
            'status'=> 'required|in:Belum Dikerjakan,Sedang Dikerjakan,Selesai',
            'description'=> 'required',
        ]);

        $task = Task::find($id);

        $task->update([
            'name'=> $request->name,
            'deadline'=>  $request->deadline,
            'status'=>  $request->status,
            'description'=>  $request->description,
        ]);

        return redirect()->route('tasks.list');
    }

    public function delete(string $id)
    {
        Task::find($id)->delete();

        return redirect()->route('tasks.list');
    }




    // Menampilkan detail tugas
    public function show($id)
    {
        // Mendapatkan tugas berdasarkan ID
        $task = Task::find($id);
        // Jika tugas ditemukan, tampilkan detailnya
        if ($task) {
            return view('task.show', [
                'task' => $task
            ]);
        } 
    }
}


