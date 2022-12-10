<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Activity extends Model
{
    use HasFactory;
    use SoftDeletes; //Usaremos soft deletes para eliminaciones lógicas en esta tabla maestro

    protected $fillable = [
        'title','description','start_date','end_date', 'price', 'popularity_id'
    ];
    protected $dates= [
        'created_at', 'updated_at', 'deleted_at'
    ];

    public function booking()
    {
        return $this->hasMany(Activity_booking::class);
    }

    public function popularity()
    {
        return $this->belongsTo(Popularity::class);
    }

    public function related_activities()
    {
     return $this->belongsToMany(Activity::class, 'activity_relateds', 'activity_id', 'activity_related_id');
    }



}
