@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Admin Dashboard</h1>
    <button onclick="manageTrainers()">Manage Trainers</button>
    <button onclick="manageClasses()">Manage Class Schedules</button>

    <div id="admin-actions">
        <!-- Admin actions will be loaded here -->
    </div>
</div>
@endsection

<script>
function manageTrainers() {
    document.getElementById('admin-actions').innerHTML = `
        <h3>Manage Trainers</h3>
        <!-- Add more HTML or forms to manage trainers -->
    `;
}

function manageClasses() {
    document.getElementById('admin-actions').innerHTML = `
        <h3>Manage Class Schedules</h3>
        <!-- Add more HTML or forms to manage class schedules -->
    `;
}
</script>
