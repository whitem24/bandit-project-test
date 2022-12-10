<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Popularity extends Model
{
    use HasFactory;
    use SoftDeletes; // Usaremos softDeletes para eliminación lógica en esta tabla maestro

    protected $fillable = [
        'title','level'
    ];
    protected $dates= [
        'created_at', 'updated_at', 'deleted_at'
    ];

    public function activities()
    {
        return $this->hasMany(Activity::class);
    }
}
