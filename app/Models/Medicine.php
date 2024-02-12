<?php

namespace App\Models;

use App\ImageUpload;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    use HasFactory , ImageUpload;

    protected $fillable = ['name','speciality_id'];
    public function speciality(){
        return $this->belongsTo(Speciality::class);
    }
    public function disease(){
        return $this->belongsTo(Disease::class);
    }
    public function consultation(): BelongsToMany
    {
        return $this->belongsToMany(Consultation::class);
    }
    public function image(): MorphOne
    {
        return $this->morphOne(Image::class, 'imageable');
    }

}
