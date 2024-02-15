<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo; // Add this line

class Appointment extends Model
{
    use HasFactory;
    protected $fillable = [
        'doctor_id',
        'patient_id',
        'date',
        'shift_work',
    ];
    public function doctor() : BelongsTo
    {
        return $this->belongsTo(Doctor::class,'doctor_id');
    }

    public function patient() : BelongsTo
    {
        return $this->belongsTo(Patient::class , 'patient_id');
    }
    public function consultation(): BelongsTo
    {
        return $this->belongsTo(Consultation::class);
    }
}
