<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\StatusController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard.index');
});

// route untuk menampilkan halaman daftar tugas
Route::get('/tasks', [TaskController::class, 'index']);

Route::get('/detail/{id}', [TaskController::class, 'show']);

// route untuk menampilkan halaman list
Route::get('/tasks/list', [TaskController::class, 'list'])->name('tasks.list');
Route::get('/tasks/create', [TaskController::class, 'create'])->name('tasks.create');
Route::post('/tasks/store', [TaskController::class, 'store'])->name('tasks.store');
Route::get('/tasks/edit/{id}', [TaskController::class, 'edit'])->name('tasks.edit');
Route::put('/tasks/update/{id}', [TaskController::class, 'update'])->name('tasks.update');
Route::delete('/tasks/delete/{id}', [TaskController::class, 'delete'])->name('tasks.delete');

// route untuk menampilkan halaman categories
Route::get('/categories/list',[CategoriesController::class,'list'])->name('categories.list');
Route::get('/categories/create',[CategoriesController::class,'create'])->name('categories.create');
Route::post('/categories/store',[CategoriesController::class,'store'])->name('categories.store');
Route::get('/categories/edit/{id}',[CategoriesController::class,'edit'])->name('categories.edit');
Route::put('/categories/update/{id}',[CategoriesController::class,'update'])->name('categories.update');
Route::delete('/categories/delete/{id}',[CategoriesController::class,'delete'])->name('categories.delete');

// route untuk menampilkan halaman projects
Route::get('projects',[ProjectsController::class,'index'])->name('projects');

Route::get('detail/{id}',[ProjectsController::class,'detail']);

Route::get('/projects/list',[ProjectsController::class,'list'])->name('projects.list');
Route::get('/projects/create',[ProjectsController::class,'create'])->name('projects.create');
Route::post('/projects/store',[ProjectsController::class,'store'])->name('projects.store');
Route::get('/projects/edit/{id}',[ProjectsController::class,'edit'])->name('projects.edit');
Route::put('/projects/update/{id}',[ProjectsController::class,'update'])->name('projects.update');
Route::delete('/projects/delete/{id}',[ProjectsController::class,'delete'])->name('projects.delete');

// route untuk menampilkan halaman  status
Route::get('/status/list',[StatusController::class,'list'])->name('status.list');
Route::get('/status/create',[StatusController::class,'create'])->name('status.create');
Route::post('/status/store',[StatusController::class,'store'])->name('status.store');
Route::get('/status/edit/{id}',[StatusController::class,'edit'])->name('status.edit');
Route::put('/status/update/{id}',[StatusController::class,'update'])->name('status.update');
Route::delete('/status/delete/{id}',[StatusController::class,'delete'])->name('status.delete');