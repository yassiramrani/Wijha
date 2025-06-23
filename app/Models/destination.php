<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class destination extends Model
{
    use HasFactory;
    protected $fillable = ['nom_ville', 'date_depart', 'date_final'];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function reglements(){
        return $this->hasMany(reglement::class);
    }
    
}
