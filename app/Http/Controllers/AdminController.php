<?php

namespace App\Http\Controllers;

use App\Models\Trainer;
use App\Models\ClassSchedule;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function manageTrainers()
    {
        return Trainer::all();
    }

    public function createTrainer(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'expertise' => 'required|string|max:255',
        ]);

        Trainer::create($request->all());

        return response()->json(['message' => 'Trainer created successfully']);
    }

    public function scheduleClass(Request $request)
    {
        $request->validate([
            'trainer_id' => 'required|exists:trainers,id',
            'class_time' => 'required|date',
            'capacity' => 'required|integer',
        ]);

        ClassSchedule::create($request->all());

        return response()->json(['message' => 'Class scheduled successfully']);
    }
}
