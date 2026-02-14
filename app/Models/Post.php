<?php

namespace App\Models;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $with = ['penulis', 'category'];

    public function penulis(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function scopeFilter(Builder $query, array $fillters): void
    {
        $query->when($fillters['search'] ?? false, function($query, $search) {
            $query->where('judul', 'like', '%' . $search . '%');
        });
        
        $query->when($fillters['category'] ?? false, function($query, $category){
            $query->whereHas('category', fn(Builder $query) =>
                $query->where('slug', $category));
        });
        $query->when($fillters['penulis'] ?? false, function($query, $penulis){
            $query->whereHas('penulis', fn(Builder $query) =>
                $query->where('username', $penulis));
        });
    }
}
