<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Strip extends Model
{
    use HasFactory;

    /*
     * Relationships
     */

    public function source()
    {
        return $this->belongsTo(Source::class);
    }

    public function comic()
    {
        return $this->source->comic();
    }
}
