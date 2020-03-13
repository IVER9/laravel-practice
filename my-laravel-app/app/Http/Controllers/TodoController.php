<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;
use App\Http\Requests\CreateTodo;
class TodoController extends Controller
{
    public function index() {
        $todos = Todo::all();
        $data = $todos->toArray();
        return view('todos.index',  ['todos' => $data]);
    }
    public function showCreateForm() {
        return view('todos/create');
    }
    public function create(CreateTodo $request) {
        $todos = new Todo();
        $todos->title = $request->title;
        $todos->detail = $request->detail;
        $todos->status = '0';
        $todos->save();
        return redirect('/');
    }
}
