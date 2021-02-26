<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Letter extends Model
{
    public function user(): BelongsTo
    {
        return $this->belongsTo('App\User');
    }
}
