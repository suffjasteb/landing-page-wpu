<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    protected $fillable = ['title', 'author', 'slug', 'body'];
    use HasFactory;

    protected $with = ['author', 'category'];

    // 1 tulisan dimiliki oleh 1 user => BelongsTo
    public function author(): BelongsTo 
    {
        // this belong Models User
        return $this->belongsTo(User::class);
    }

    public function category(): BelongsTo 
    {
        // this belong Models User
        return $this->belongsTo(Category::class);
    }

}
