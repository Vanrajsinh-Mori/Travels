<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    protected $primaryKey = 'thread_id';
    protected $fillable = ['thread_title', 'thread_desc', 'thread_cat_id', 'thread_user_id', 'timestamp'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'thread_cat_id', 'cetegory_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'thread_user_id', 'id');
    }
}
