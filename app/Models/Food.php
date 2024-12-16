<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $primaryKey="id";

    protected $fillable = [
        'title',
        'price',
        'image',
        'description',
    ];

    use HasFactory;
}
