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
    public function appointment(){
        return $this->hasMany(Appointment::class);
    }
    public function comment()
    {
        return $this->hasMany(Comment::class);
    }
    public function favorit()
    {
        return $this->hasMany(Favorit::class);
    }
    public function rate()
    {
        return $this->hasMany(Rate::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
