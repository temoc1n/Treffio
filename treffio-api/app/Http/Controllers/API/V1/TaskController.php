<?php

namespace App\Http\Controllers\API\V1; /*-> Notice that the namespace changed, this is because we are assigning  this controller to the first version of the API (V1), we do this so it is possible for us in the future to create multiple versions of the API and still keep the oldest versions available*/

use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Models\Task;
use App\Http\Controllers\Controller;

use App\Http\Resources\V1\TaskResource;
use App\Http\Resources\V1\TaskCollection;
//use App\Services\V1\TaskQuery;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //Orders the database data starting by the last item created
        $task = DB::table('tasks')
            ->orderBy('created_at','desc')
            ->get();

        //Returns those values after parsing the values through the TaskCollection
        return new TaskCollection($task); 
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
    public function store(StoreTaskRequest $request)
    {
        return new TaskResource(Task::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        return new TaskResource($task);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTaskRequest $request, Task $task)
    {
        $task->update($request->all());

        return new TaskResource($task);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $id = $task->id;            //Gets the ID assigned to the object Task
        
        $checkTask = Task::find($id);

        if (!$checkTask)
        {
            return "Impossible to delete task.";
        } else {
            Task::findOrFail($id)->delete();
            return "Task Deleted!";
        }



    }
}
