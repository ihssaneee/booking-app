<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable = ['date_debut_sejour', 'date_fin_sejour', 'id_internaute', "id_hotel",'titre'];
    public function internaute()
    {
        return $this->belongsTo(Internaute::class);
    }
    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }
}
