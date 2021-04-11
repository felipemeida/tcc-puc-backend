<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['color', 'name', 'type'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function Books()
    {
        return $this->hasMany(Book::class);
    }
    public function Posts()
    {
        return $this->hasMany(Post::class);
    }
}
