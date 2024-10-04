<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class Management System</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{ route('adminLogin') }}">Admin Dashboard</a></li>
                <li><a href="{{ route('trainer.dashboard') }}">Trainer Dashboard</a></li>
                <li><a href="{{ route('trainee.dashboard') }}">Trainee Dashboard</a></li>
            </ul>
        </nav>
    </header>

    <div class="main-content">
        @yield('content')
    </div>
</body>
</html>
