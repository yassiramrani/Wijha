<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class reglement extends Model
{
    use HasFactory;
    protected $fillable = ['dest', 'nationalite'];

    public function destination()
    {
        return $this->belongsTo(destination::class);
    }
}
