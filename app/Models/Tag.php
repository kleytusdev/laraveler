<?php

namespace App\Models;

use App\Enums\TagEnum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tag extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }

    public static function getIdByName($name)
    {
        return static::where('name', $name)->value('id');
    }

    protected $fillable = ['name'];

    // protected $casts = [
	// 	'name' => TagEnum::class,
	// ];
}
