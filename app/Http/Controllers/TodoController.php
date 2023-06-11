<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
  public function edit($id)
  {
    return view("todo.edit", ["todo" => Todo::find($id)]);
  }

  public function create()
  {
    return view("todo.create");
  }

  public function store(Request $request)
  {
    $todo = Todo::create([
      'todo' => $request->todo,
      'status' => false 
    ]);

    $todo->save();

    return redirect()->route('home');
  }

  public function update(Request $request, $id)
  {
    $todo = Todo::find($id);
    $todo->todo = $request->todo;
    $todo->status = $request->status;
    $todo->save();

    return redirect()->route('home');
  }

  public function delete($id){
    $todo = Todo::find($id);
    $todo->delete();
    return redirect()->route('home');
  }
}
