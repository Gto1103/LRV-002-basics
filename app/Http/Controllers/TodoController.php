<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('todo', ['todo' => Todo::all()]);

        //$todo = Todo::all();
        //$data = compact('todo');
        //return view("welcome")->with($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'title' => 'required|min:3|max:20',
                'description' => 'required|min:5|max:200'
            ]
        );
        $todo = new Todo();
        $todo->title = $request->input('title');
        $todo->description = $request->input('description');
        $todo->save();

        return redirect()->route('todo');
    }

    /**
     * Display the specified resource.
     */
    public function show($id = null)
    {
        return view('todo_search', ['todo_search' => Todo::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Todo $todo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Todo $todo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Todo::find($id)->delete();
        return redirect(route('todo'));
    }
}
