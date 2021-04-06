<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comment;
class Book extends Model
{
    use HasFactory;
        protected $primaryKey = '_id';
        public function comments()
    {
        return $this->hasMany(Comment::class, 'book_id');
    }
    public function commentcount()
{
    return Comment::where('book_id',$this->id)->count();
}
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
