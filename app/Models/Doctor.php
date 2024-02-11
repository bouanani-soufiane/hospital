<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $fillable = [
        "name",
        "email",
        "password",
        "speciality_id",
        "user_id"
    ];
    public function speciality(){
        return $this->hasOne(Speciality::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
