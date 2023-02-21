<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Source extends Model
{
    use HasFactory;

    /*
     * Relationships
     */

    public function comic()
    {
        return $this->belongsTo(Comic::class);
    }

    public function strips()
    {
        return $this->hasMany(Strip::class);
    }
}
