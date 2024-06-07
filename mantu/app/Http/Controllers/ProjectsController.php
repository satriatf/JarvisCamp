<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Projects;
use App\Models\Status;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index(){
        // mendapat tugas dari model
        $projects = Projects::All();
        return view("projects.index",[
            "projects"=> $projects
        ]);
    }

    public function list(){
        $projects = Projects::All();
        return view("projects.list",[
            "projects"=> $projects
        ]);
    }

    public function create(){
        $statuses = Status::All();    
        $categories = Categories::All();
        return view("projects.create",[
            "statuses"=> $statuses,
            "categories"=> $categories
        ]);
    }
    public function store(Request $request){
        $data = $request->validate([
            'name'=>'required|max:100|min:3',
            'start_date'=>'required|date',
            'end_date'=>'required|date',
            'description'=> 'required',
            'status_id'=>'nullable',
            'categories_id'=>'nullable'
        ]);
        Projects::create($data);
        return redirect()->route('projects.list');
    }

    public function edit(string $id){
        $projects = Projects::find($id);    
        $statuses = Status::All();    
        $categories = Categories::All();
        return view('projects.edit',compact('projects'),[
            'statuses'=> $statuses,
            'categories'=>$categories
        ]);
    }
    public function update(Request $request, string $id){
        $data = $request->validate([
            'name'=>'required|max:100|min:3',
            'start_date'=>'required|date',
            'end_date'=>'required|date',
            'description'=> 'required',
            'status_id'=>'nullable',
            'categories_id'=>'nullable'

        ]);
        $projects = Projects::find($id);
        $projects->update($data);
        return redirect()->route('projects.list');
    }
    public function delete(string $id){
        Projects::find($id)->delete();
        return redirect()->route('projects.list');
    }

    public function detail($id){
        $projects = Projects::All();
        $projects_detail = collect($projects)->firstWhere("id", $id);

        return view("task.show",[
            'task'=>$projects_detail
        ]);
    }
}
