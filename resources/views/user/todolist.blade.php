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
        <div class="todolist-profilebar">
            <h3 class="todolist-profilebar-name">{{ $user['name'] }}</h3>
            <a href="{{ route('logout') }}">Logout <i class="fas fa-sign-out-alt"></i></a>
        </div>
        <form method="post" class="todolist-form">
            @csrf
            <input class="todolist-input" type="text" name="newtask" placeholder="Nova tarefa">
            <button class="todolist-button"><i class="fas fa-plus"></i></button>
        </form>
        
        @foreach ($tasks as $task)
            <div class="todolist-task">
                <div class="todolist-task-item">{{ $task['name'] }}</div>
                <form method="get" action="{{ route('todolist/delete') }}">
                    <input name="id" type="hidden" value="{{ $task['id'] }}">
                    <button class="todolist-button-delete"><i class="fas fa-trash"></i></button>
                </form>
            </div>
        @endforeach
    </div>
</body>
</html>