<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {

    require_once('../lib/dbh.php');
    require_once('../models/Task.php');
    require_once('../controllers/TaskController.php');

    //get data from the form
    $taskId = $_POST['id'];

    //instantiate class
    $task = new TaskController();

    $task->removeTask($taskId);
}