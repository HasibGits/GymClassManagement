// Admin functionality
function manageTrainers() {
    document.getElementById('admin-content').innerHTML = `
        <h3>Manage Trainers</h3>
        <p>Here you can add, edit, or remove trainers.</p>
        <button>Add Trainer</button>
        <button>Edit Trainer</button>
        <button>Remove Trainer</button>
    `;
}

function scheduleClasses() {
    document.getElementById('admin-content').innerHTML = `
        <h3>Schedule Classes</h3>
        <p>Here you can schedule new classes.</p>
        <button>Create New Class</button>
    `;
}

function assignTrainers() {
    document.getElementById('admin-content').innerHTML = `
        <h3>Assign Trainers</h3>
        <p>Select a class and assign a trainer.</p>
        <form>
            <label for="classes">Select Class:</label>
            <select id="classes">
                <option value="yoga">Yoga</option>
                <option value="pilates">Pilates</option>
                <option value="boxing">Boxing</option>
            </select>
            <br>
            <label for="trainers">Select Trainer:</label>
            <select id="trainers">
                <option value="john">John Doe</option>
                <option value="jane">Jane Smith</option>
            </select>
            <br>
            <button type="submit">Assign</button>
        </form>
    `;
}

// Trainer functionality
function viewSchedule() {
    document.getElementById('trainer-content').innerHTML = `
        <h3>Your Class Schedule</h3>
        <ul>
            <li>Yoga - Monday 10:00 AM</li>
            <li>Pilates - Wednesday 2:00 PM</li>
        </ul>
    `;
}

// Trainee functionality
function manageProfile() {
    document.getElementById('trainee-content').innerHTML = `
        <h3>Manage Profile</h3>
        <p>Here you can edit your personal details.</p>
        <button>Edit Profile</button>
    `;
}

function bookClasses() {
    document.getElementById('trainee-content').innerHTML = `
        <h3>Available Classes</h3>
        <ul>
            <li>Yoga - <button>Book</button></li>
            <li>Pilates - <button>Book</button></li>
            <li>Boxing - <button>Book</button></li>
        </ul>
    `;
}

$(document).ready(function() {
    $('.register-btn').click(function(e) {
        e.preventDefault();
        var form = $(this).closest('form');

        $.ajax({
            url: form.attr('action'),
            type: form.attr('method'),
            data: form.serialize(),
            success: function(response) {
                // Handle successful registration
                alert('Admin registered successfully!');
                window.location.href = "{{ route('admin.login') }}";
            },
            error: function(response) {
                // Handle errors
                console.log(response.responseJSON);
            }
        });
    });
});