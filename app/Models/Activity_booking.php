<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity_booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'people','price','reservation_date','activity_date', 'activity_id'
    ];
    protected $dates= [
        'created_at', 'updated_at'
    ];
    
    public function activity()
    {
        return $this->belongsTo(Activity::class);

    }
}
