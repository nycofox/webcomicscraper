<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    use HasFactory;

    /*
     * Relationships
     */

    public function sources()
    {
        return $this->hasMany(Source::class);
    }
}
