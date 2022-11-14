<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
class TodoController extends Controller
{
    public function index (){
        return view('welcome',['list'=>Todo::all()]);
    }
    public function saveTodo(Request $req){
        $todo = new Todo();
        $todo->title = $req->todo;
        $todo->save();
        return back();
    }
}
