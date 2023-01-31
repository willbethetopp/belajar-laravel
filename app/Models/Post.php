<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    // Column can not fill in
    protected $guarded = ['id'];

    // Column can fill in
    // $fillable can override $guarded
    // protected $fillable = ['title', 'slug', 'excerpt', 'body'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
