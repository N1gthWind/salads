<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salad extends Model
{
    use HasFactory;

    protected $fillable = [
        "name","price","description","image_path"
    ];

    protected $table = 'salads';

    protected $primaryKey = 'salad_id';
}
