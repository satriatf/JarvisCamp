<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Status;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function list(){
        $categories = Categories::All();
        return view("categories.list",[
            "categories"=> $categories
        ]);
    }

    public function create(){
        return view("categories.create");
    }
    public function store(Request $request){
        $data = $request->validate([
            'name'=>'required|max:100|min:3',
        ]);
        Categories::create($data);
        return redirect()->route('categories.list');
    }

    public function edit(string $id){
        $categories = Categories::find($id);    
        return view('categories.edit',compact('categories'));
    }
    public function update(Request $request, string $id){
        $data = $request->validate([
            'name'=>'required|max:100|min:3',
        ]);
        $categories = Categories::find($id);
        $categories->update($data);
        return redirect()->route('categories.list');
    }
    public function delete(string $id){
        Categories::find($id)->delete();
        return redirect()->route('categories.list');
    }
}
