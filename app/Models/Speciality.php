<?php

namespace App\Models;

use App\ImageUpload;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;


class Speciality extends Model
{
    use HasFactory, ImageUpload;
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
