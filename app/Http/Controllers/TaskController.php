<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\TaskStatus;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->user_type==='manager'){
            $users=User::where('user_type', 'user')->get();
            $statuses=TaskStatus::all();
            $tasks=Auth::user()->tasks;
            return view('manager.tasks.index', ['users'=>$users, 'statuses'=>$statuses, 'tasks'=>$tasks]);

        }else if (Auth::user()->user_type==='user'){
            return view('user.tasks.index');

        }else{
            abort(404);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'user' => ['required', 'string', 'max:255'],
            'status' => ['required', 'string', 'max:255'],
        ]);

        Task::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'status'=>$request->status,
            'created_by'=>Auth::user()->id,
            'assigned_to'=>$request->user,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Auth::user()->user_type==='manager'){
            $users=User::where('user_type', 'user')->get();
            $statuses=TaskStatus::all();
            $task=Task::findOrFail($id);
            return view('manager.tasks.edit', ['users'=>$users, 'statuses'=>$statuses, 'task'=>$task]);

        }else if (Auth::user()->user_type==='user'){
            return view('user.tasks.edit');

        }else{
            abort(404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'user' => ['required', 'string', 'max:255'],
            'status' => ['required', 'string', 'max:255'],
        ]);

        Task::find($id)->update([
            'name'=>$request->name,
            'description'=>$request->description,
            'status'=>$request->status,
            'assigned_to'=>$request->user,
        ]);

        return redirect()->route('tasks.edit', [$id]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
