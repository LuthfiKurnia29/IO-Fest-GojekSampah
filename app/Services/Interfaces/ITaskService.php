<?php

namespace App\Services\Interfaces;

interface ITaskService
{
    public function takeTask($id);
    public function completeTask($id);
    public function assignTask($id);
    public function getHistory();
}
