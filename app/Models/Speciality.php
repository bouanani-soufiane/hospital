<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Speciality extends Model
{
    use HasFactory;
    protected $fillable = ['name'];
    public function doctor()
    {
        return $this->belongsToMany(Doctor::class);
    }
    public function medicine(){
        return $this->hasMany(Medicine::class);
    }
    public function image(): MorphOne
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
