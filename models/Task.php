<?php

class Task extends Dbh {
    protected function setTask($taskName){
        $stmt = $this->connect()->prepare('INSERT INTO tasks(task_name) 
        VALUES (?);');

        //check if success
        if(!$stmt->execute(array($taskName))){
            $stmt = null;
            header("location: ../index.php?error=stmtFailed");
            exit();
        }

        $stmt = null;
    }

    public function getTasks(){
        $stmt = $this->connect()->query('SELECT * FROM tasks ORDER BY created_at DESC');
        $results = $stmt->fetchAll();

        return $results;
    }

    protected function updateTaskCompletion($id){
        $stmt = $this->connect()->prepare('UPDATE tasks SET is_completed = 1 WHERE id = ?');

        //check if success
        if(!$stmt->execute(array($id))){
            $stmt = null;
            header("location: ../index.php?error=stmtFailed");
            exit();
        }

        $stmt = null;
    }

    protected function deleteTask($id){
        $stmt = $this->connect()->prepare('DELETE FROM tasks WHERE id = ?');

        //check if success
        if(!$stmt->execute(array($id))){
            $stmt = null;
            header("location: ../index.php?error=stmtFailed");
            exit();
        }

        $stmt = null;
    }
}