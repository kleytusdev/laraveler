<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PostTag extends Pivot
{
    use HasFactory;

    protected $fillable = ['post_id', 'tag_id'];
}
