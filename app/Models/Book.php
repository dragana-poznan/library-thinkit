<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use HasFactory, SoftDeletes;

    public $primaryKey = 'id';

    protected $fillable = [
        'title',
        'description',
        'book_no',
        'author_id',
    ];

    public function author()
    {
        $this->belongsTo(Author::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
