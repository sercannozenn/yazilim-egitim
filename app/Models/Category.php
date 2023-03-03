<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Category extends Model
{
    use HasFactory;

    protected $guarded = ["id", "created_at", "updated_at"];

    public function parentCategory():HasOne
    {
        return $this->hasOne(Category::class, 'id', 'parent_id');
    }

}
