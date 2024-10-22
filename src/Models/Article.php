<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use WireComments\Traits\Commentable;

class Article extends Model
{
    use HasFactory, Commentable;

    public function user(): BelongsTo {
        return $this->belongsTo(config('auth.providers.users.model'));
    }
}
