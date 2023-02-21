<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoControler extends Controller {
  /* 
    * index para mostrar todos los elementos
    * store para guardar un todo
    * update para actualizar un todo
    * destroy para eliminar un todo
    * edit para mostrar un formulario de edición
    */

  public function store(Request $request) {
    $request->validate([
      'title' => 'required|min:3'
    ]);

    $todo = new Todo();
    $todo->title = $request->title;
    $todo->save();

    return redirect()->route('todos')->with('success', 'Task create successfly');
  }

  public function index() {
    $todos = Todo::all();
    return view('todos.index', ['todos' => $todos]);
  }

  public function show($id) {
    $todo = Todo::find($id);
    return view('todos.show', ['todo' => $todo]);
  }

  public function update(Request $request, $id) {
    $todo = Todo::find($id);
    $todo->title = $request->title;
    $todo->save();

    //return view('todos.index', ['success' => 'Task update']);
    return redirect()->route('todos')->with('success', 'Task updated');
  }

  public function destroy($id) {
    $todo = Todo::find($id);
    $todo->delete();

    return redirect()->route('todos')->with('success', 'Task deleted');
  }
}
