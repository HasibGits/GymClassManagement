<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = ['trainee_id', 'class_id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'trainee_id');
    }

    public function class()
    {
        return $this->belongsTo(ClassModel::class);
    }
}
