@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Trainer Dashboard</h1>
    <button onclick="viewSchedule()">View Your Class Schedule</button>

    <div id="trainer-schedule">
        <!-- Trainer schedule will be loaded here -->
    </div>
</div>
@endsection

<script>
function viewSchedule() {
    document.getElementById('trainer-schedule').innerHTML = `
        <h3>Your Class Schedule</h3>
        <ul>
            <li>Yoga - Monday 10:00 AM</li>
            <li>Pilates - Wednesday 2:00 PM</li>
        </ul>
    `;
}
</script>
