<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
class TodoController extends Controller
{
    //
    function todo(Request $req){
       $todo = new Todo;
       $todo->todo = $req->todo;
       $todo->save();
       return redirect('/');
    }
    function getData(){
        $data=Todo::all();
        return view('todolist',["todos"=>$data]);
    }
    function deleteData($id){
        $data = Todo::find($id);
        $data->delete();
        return redirect('/');
        
    }
}
