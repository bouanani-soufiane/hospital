<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $fillable = [

        "birthday",
        "user_id"
    ];
    public function person()
    {
        return $this->belongsTo(User::class);
    }
}
