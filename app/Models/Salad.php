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

    public function user() {
        return $this->belongsTo(User::class,'foreign_salad_id','id');
        //A 2. paraméter a Comment táblában levő foregin key oszlop nevének a megadására szolgál

        // return $this->belongsTo(BlogPosts::class,'post_id', 'blog_post_id');
    }
}
