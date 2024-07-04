<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title','slug','description','category_id','content','posted','image'];

    public function category(){

        return $this->belongsTo(Category::class);

    }
}
