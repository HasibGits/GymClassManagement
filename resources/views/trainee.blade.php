@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Trainee Dashboard</h1>
    <button onclick="manageProfile()">Manage Profile</button>
    <button onclick="bookClasses()">Book Classes</button>

    <div id="trainee-actions">
        <!-- Trainee actions will be loaded here -->
    </div>
</div>
@endsection

<script>
function manageProfile() {
    document.getElementById('trainee-actions').innerHTML = `
        <h3>Manage Profile</h3>
        <!-- Add form or actions to edit profile -->
    `;
}

function bookClasses() {
    document.getElementById('trainee-actions').innerHTML = `
        <h3>Book Classes</h3>
        <ul>
            <li>Yoga - <button>Book</button></li>
            <li>Pilates - <button>Book</button></li>
            <li>Boxing - <button>Book</button></li>
        </ul>
    `;
}
</script>
