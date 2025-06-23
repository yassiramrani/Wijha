<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class activite extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'date_debut', 'durre'];
}
