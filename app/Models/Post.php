<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    public function scopeFilter(Builder $query, array $filters): void {
        // jika filters yang kita kasi name search ini ada isinya maka ambil isi dari search nya
        $query->when(isset($filters['search']) ? $filters['search'] : false, function($query) {
            $query->where('title', 'like' , '%' . request('search') . '%');
        });

        $query->when(isset($filters['category']) ? $filters['category'] : false, function($query, $category) {
            $query->whereHas('category', fn($query) => $query->where('slug', $category));
        });

        $query->when($filters['author'] ?? false, fn ($query, $author) => $query->whereHas( 'author' ,fn ($query) => $query->where('username' , $author) ));
    }

}
