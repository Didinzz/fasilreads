<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'book_category';
    protected $fillable =  ['kategori', 'deskripsi', 'gambbar'];
}
