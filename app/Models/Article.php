<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    public function getThumbImgUrlAttribute()
    {
        return "https://via.placeholder.com/500/DFDFDF/000000?text=^_^";
    }
}
