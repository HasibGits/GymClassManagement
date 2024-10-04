<?php

namespace App\Http\Controllers;

use App\Models\Trainer;
use App\Models\ClassSchedule;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function bookClass(Request $request)
{
    $request->validate([
        'class_id' => 'required|exists:class_schedules,id',
    ]);

    Booking::create([
        'trainee_id' => Auth::user()->id,
        'class_id' => $request->class_id,
        'booking_time' => now(),
    ]);

    return response()->json(['message' => 'Class booked successfully']);
}



}
