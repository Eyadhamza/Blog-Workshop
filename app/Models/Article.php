<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Article extends Model
{
    protected $fillable = ['title', 'description', 'image', 'category_id', 'user_id'];

    public function categories(): BelongsToMany
    {
        return $this->BelongsToMany(Category::class);
    }

    public function user(): BelongsTo
    {
        return $this->BelongsTo(User::class);
    }

    public function tags(): BelongsToMany
    {
        return $this->BelongsToMany(Tag::class);
    }

    public function comments(): hasMany
    {
        return $this->$this->hasMany(Comment::class);
    }
}
