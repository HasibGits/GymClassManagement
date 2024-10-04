<?php

namespace App\Http\Controllers;

use App\Models\Trainer;
use App\Models\ClassSchedule;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function viewClasses()
{
    $trainerId = Auth::user()->id;
    $classes = ClassSchedule::where('trainer_id', $trainerId)->get();

    return response()->json($classes);
}



}
