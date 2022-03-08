<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    public function jour() {
        return $this->belongsTo(\App\Models\Jour::class);
    }
    public function user() {
        return $this->hasOne(User::class);
    }
}