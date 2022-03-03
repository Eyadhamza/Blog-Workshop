<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Category extends Model
{

    protected $fillable = ['title', 'description','image'];

    public function articles(): BelongsToMany
    {
        return $this->belongsToMany(Article::class);
    }
}
