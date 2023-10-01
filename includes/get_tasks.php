<?php

require_once('../lib/dbh.php');
require_once('../models/Task.php');

//instantiate class
$Task = new Task();

//get all data
$tasks = $Task->getTasks();

foreach ($tasks as $task) {
    $checked = $task['is_completed'] ? 'checked' : '';
    echo "
    <div class='d-flex justify-content-between mb-3'>
        <div class='form-check'>
            <input class='form-check-input' type='checkbox' onchange='toggleTaskCompletion({$task['id']})' {$checked}>
            <label class='form-check-label'>
                {$task['task_name']}
            </label>
        </div>
        <button class='btn btn-danger btn-sm text-end' onclick='deleteTask({$task['id']})'>Delete</button>
    </div>";
}