<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Journee extends Model
{
    use HasFactory;

    protected $fillable = ['date', 'heureDebut', 'heureFin', 'typeDon'];

    public function users() {
        return $this->belongsToMany('App\Models\Users')->withPivot('heure_reservation');
    }
}
