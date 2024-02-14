<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        return $this->belongsTo(Doctor::class);
    }

    public function patient() : BelongsTo
    {
        return $this->belongsTo(Patient::class);
    }
    public function consultation(): BelongsTo
    {
        return $this->belongsTo(Consultation::class);
    }
}
