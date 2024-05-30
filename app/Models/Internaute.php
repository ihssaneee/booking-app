<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Internaute extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'prenom', 'adresse', 'date_naissance', 'cin',];
    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }

}
