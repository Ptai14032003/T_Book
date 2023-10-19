<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'books';
    protected $fillable = [
        'book_title',
        'price',
        'promotion_price',
        'publishing_year',
        'quantity',
        'cate_id',
        'image',
        'description',
        'publisher_id'
    ];
}
