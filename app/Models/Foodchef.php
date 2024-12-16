<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foodchef extends Model
{

    protected $table='foodchefs';
    protected $primaryKey='id';

    protected $fillable = [
        'name',
        'image',
        'speciality',
    ];

    use HasFactory;
}
