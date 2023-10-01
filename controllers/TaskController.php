<?php

class TaskController extends Task {

    public function addTask($taskName) {
        if(empty($taskName)){
            //redirect to
            header("location: ../index.php?error=incomplete&task_name=$taskName");
            exit();
        }

        $this->setTask($taskName);
    }

    public function editTaskCompletion($id){
        if(empty($id)){
            //redirect to
            header("location: ../index.php?error=incomplete&id=$id");
            exit();
        }

        $this->updateTaskCompletion($id);
    }

    public function removeTask($id){
        if(empty($id)){
            //redirect to
            header("location: ../index.php?error=incomplete&id=$id");
            exit();
        }

        $this->deleteTask($id);
    }
}