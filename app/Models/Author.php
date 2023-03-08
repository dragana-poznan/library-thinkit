<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Author extends Model
{
    use HasFactory, SoftDeletes;

    public $primaryKey = 'id';

    protected $fillable = [
        'name',
        'surname',
        'image',
    ];

    //one author multiple books one to meny
    public function books(){
        return $this->hasMany(Book::class);
    }
}
