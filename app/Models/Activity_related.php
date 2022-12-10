<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity_related extends Model
{
    use HasFactory;

    protected $fillable = [
        'acivity_id', 'activity_related_id'
    ];
    protected $dates= [
        'created_at', 'updated_at'
    ];
}
