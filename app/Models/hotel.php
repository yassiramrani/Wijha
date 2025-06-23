<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class hotel extends Model
{
    use HasFactory;
    protected $fillable = ['nom_hotel', 'prix', 'etoils', 'annee_cr', 'date_d', 'date_f'];
}
