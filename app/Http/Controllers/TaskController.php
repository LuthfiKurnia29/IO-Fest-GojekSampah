<?php

namespace App\Http\Controllers;

use App\Services\Interfaces\ITaskService;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    private $taskService;
    public function __construct(ITaskService $iTaskService)
    {
        $this->taskService = $iTaskService;
    }
    //
    public function getTasksKurir()
    {
        return view('order.admin.set-tugas');
    }

    public function takeTask(Request $request)
    {
        $this->taskService->takeTask($request->id);
    }

    public function completeTask(Request $request)
    {
        $this->taskService->completeTask($request->id);
    }
}
