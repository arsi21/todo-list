function loadTasks() {
  $.ajax({
    url: "includes/get_tasks.php",
    method: "GET",
    success: function (data) {
      $("#task-list").html(data);
    },
  });
}

function addTask() {
  var taskName = $("#task-name").val();
  if (taskName.trim() !== "") {
    $.ajax({
      url: "includes/add_task.php",
      method: "POST",
      data: { taskName: taskName },
      success: function () {
        $("#task-name").val("");
        loadTasks();
      },
    });
  }
}

function toggleTaskCompletion(taskId) {
  $.ajax({
    url: "includes/toggle_task.php",
    method: "POST",
    data: { id: taskId },
    success: function () {
      loadTasks();
    },
  });
}

function deleteTask(taskId) {
  $.ajax({
    url: "includes/delete_task.php",
    method: "POST",
    data: { id: taskId },
    success: function () {
      loadTasks();
    },
  });
}

$(document).ready(function () {
  loadTasks();
});
