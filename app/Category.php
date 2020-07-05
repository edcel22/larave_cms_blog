<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $fillable = [ 'user_id', 'thumbnail', 'name', 'slug', 'is_published' ];

    public function user() {
    	$this->belongsTo(User::class);
    }

    public function posts() {
    	$this->belongsToMany(Post::class, 'category_posts');
    }
}
