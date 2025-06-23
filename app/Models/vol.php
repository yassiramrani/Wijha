<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class vol extends Model
{
    use HasFactory;
    protected $fillable = ['ville_d', 'ville_f', 'date_d', 'date_f', 'prix'];
}
