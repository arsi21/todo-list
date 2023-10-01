<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>To Do App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
  <body class="container d-flex justify-content-center align-items-center">
    <div style="width: 25rem;">
        <h1 class="mt-5 mb-5 text-center">To Do App</h1>
        <section>
            <div id="task-form" class="input-group mb-3">
                <input id="task-name" type="text" class="form-control" placeholder="Enter task here...">
                <button onclick="addTask()" class="btn btn-primary" type="button">Add</button>
            </div>
        </section>

        <section id="dataCont" class="mt-5">
            <div id="task-list">
            </div>
        </section>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


<script src="js/functions.js"></script>
</body>
</html>