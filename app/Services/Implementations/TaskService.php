<?php

namespace App\Services\Implementations;

use App\Services\Interfaces\ITaskService;
use App\Models\TransaksiSampah;
class TaskService implements ITaskService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }
    public function takeTask()
    {
        $task = TransaksiSampah::where('kurir_id', auth()->user()->id)->where('status', 'taken')->get();
        if($task == null){
            throw new Exception("Task not found", 404);
        }
        // $task->update(['status' => 'taken']);
        return $task;
    }
    public function completeTask($id)
    {
        $task = TransaksiSampah::find($id);
        $task->update(['status' => 'completed']);
        return $task;
    }
    public function assignTask($id)
    {
        $task = TransaksiSampah::find($id);
        $task->update(['status' => 'assigned']);
        return $task;
    }

    public function getHistory()
    {
        return TransaksiSampah::all();
    }
}
