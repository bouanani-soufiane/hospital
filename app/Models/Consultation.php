<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    use HasFactory;
    protected $fillable = ['days_of' , 'appointment_id'];
     public function appointment(): HasOne
    {
        return $this->hasOne(Appointment::class);
    }
    public function medicine(): BelongsToMany
    {
        return $this->belongsToMany(Medicine::class);
    }
}
