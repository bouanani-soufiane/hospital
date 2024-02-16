<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;


class Consultation extends Model
{
    use HasFactory;
    protected $fillable = ['days_of' , 'appointment_id','description'];
    public function appointment()
    {
        return $this->belongsTo(Appointment::class);
    }
    public function medicine()
    {
        return $this->belongsToMany(Medicine::class, 'App\Models\consultation_medicine');
    }
}
