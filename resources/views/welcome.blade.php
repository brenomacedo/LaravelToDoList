<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="welcome-container">
            <div class="welcome-info">
                <div class="welcome-icon-container">
                    <img class="welcome-icon" src="{{ asset('/images/task.png') }}" alt="logo">
                </div>
                <h2 class="welcome-title">
                    Laravel To Do List
                </h2>
                <h4 class="welcome-description">
                    A to do list made with laravel in order to test and train my php skills.
                </h4>
                <button class="welcome-btn">
                    Get Started
                </button>
            </div>
            <div class="welcome-logo">
                <img src="{{ asset('/images/logo.png') }}" alt="">
            </div>
        </div>
    </body>
</html>
