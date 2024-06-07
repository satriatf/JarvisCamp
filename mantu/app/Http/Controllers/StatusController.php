<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function list(){
        $status = Status::All();
        return view("status.list",[
            "statuses"=> $status
        ]);
    }

    public function create(){
        return view("status.create");
    }
    public function store(Request $request){
        $data = $request->validate([
            'name'=>'required|max:100|min:3',
        ]);
        Status::create($data);
        return redirect()->route('status.list');
    }

    public function edit(string $id){
        $status = Status::find($id);    
        return view('status.edit',compact('status'));
    }
    public function update(Request $request, string $id){
        $data = $request->validate([
            'name'=>'required|max:100|min:3',
        ]);
        $status = Status::find($id);
        $status->update($data);
        return redirect()->route('status.list');
    }
    public function delete(string $id){
        Status::find($id)->delete();
        return redirect()->route('status.list');
    }
}
