<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['taskName'])) {

    require_once('../lib/dbh.php');
    require_once('../models/Task.php');
    require_once('../controllers/TaskController.php');

    //get data from the form
    $taskName = $_POST['taskName'];

    //instantiate class
    $task = new TaskController();

    $task->addTask($taskName);
}