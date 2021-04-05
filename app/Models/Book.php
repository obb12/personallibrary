<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
        protected $primaryKey = '_id';
        public function comments()
    {
        return $this->hasMany(Comment::class, 'book_id');
    }
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
