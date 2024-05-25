<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // Mendapatkan dan menampilkan data tugas
    public function index()
    {
        // Mendapatkan data tugas dari model
        $tasks = Task::getAll();
        // Mengirim data tugas ke view
        return view('task.index', [
            'tasks' => $tasks
        ]);
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


