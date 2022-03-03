<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    protected $fillable = ['user_id', 'post_id', 'body'];

    public function user(): BelongsTo
    {
        return $this->belongsTo('App\User');
    }

    public function article(): BelongsTo
    {
        return $this->belongsTo('App\Models\Article');
    }
}
