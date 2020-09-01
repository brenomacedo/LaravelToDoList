<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/todolist.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&display=swap" rel="stylesheet">
    <script
      src="https://use.fontawesome.com/releases/v5.14.0/js/all.js"
      data-auto-a11y="true"
    ></script>
    <title>To do list</title>
</head>
<body>
    <div class="todolist-container">
        <a href="{{ route('logout') }}">Logout <i class="fas fa-sign-out-alt"></i></a>
        <form method="post">
            <input class="todolist-input" type="text" name="newtask" placeholder="Nova tarefa">
            <button class="todolist-button"><i class="fas fa-plus"></i></button>
        </form>
    </div>
</body>
</html>