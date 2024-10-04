<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Selector</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <header>
        <h1>Class Management System</h1>
        <nav>
            <ul>
                <!-- Add navigation links to the respective dashboards -->
                <li><a href="{{ route('adminLogin') }}">Admin</a></li>
                <li><a href="{{ route('trainer.dashboard') }}">Trainer</a></li>
                <li><a href="{{ route('trainee.dashboard') }}">Trainee</a></li>
            </ul>
        </nav>
    </header>

    <div class="content">
        <h3 >Welcome to the Class Management System. Select a panel to proceed.</h3>
    </div>
   
    
    

    <div id="div1">
        <div class="insideDiv" id="div2"><img src="{{ asset('images/images.jfif') }}" alt="Class Management System Image" ></div>
        <div class="insideDiv" id="div3"><img src="{{ asset('images/images1.jpg') }}" alt="Class Management System Image" ></div>
        <div class="insideDiv" id="div4"><img src="{{ asset('images/images2.jpg') }}" alt="Class Management System Image" ></div>
    </div>

</body>
</html>
