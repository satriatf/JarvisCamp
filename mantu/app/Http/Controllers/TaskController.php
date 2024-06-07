<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Status;
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

    public function create(){
        $statuses = Status::All();    
        $categories = Categories::All();    
        return view("task.create",[
            "statuses"=> $statuses,
            "categories"=> $categories,
        ]);
    }
    public function store(Request $request){
        $data = $request->validate([
            'nama'=>'required|max:100|min:3',
            'deadline'=>'required|date',
            // 'status'=> 'required|in:Belum Dikerjakan,Sedang Dikerjakan,Selesai',
            'description'=> 'required',
            'status_id'=>'nullable',
            'categories_id'=>'nullable',
        ]);
        Task::create($data);
        return redirect()->route('tasks.list');
    }

    public function edit(string $id){
        $task = Task::find($id);    
        $statuses = Status::All();    
        $categories = Categories::All();   
        return view('task.edit',compact('task'),[
            'statuses'=> $statuses,
            'categories'=> $categories
        ]);
    }
    public function update(Request $request, string $id){
        $data = $request->validate([
            'nama'=>'required|max:100|min:3',
            'deadline'=>'required|date',
            'description'=> 'required',
            'status_id'=>'nullable',
            'categories_id'=>'nullable',

        ]);
        $task = Task::find($id);
        $task->update($data);
        return redirect()->route('tasks.list');
    }
    public function delete(string $id){
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


