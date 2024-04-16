<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TaskStatus extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function tasks(): HasMany
    {
        return $this->hasMany(Task::class);
    }

    public static function getIdByName($name)
    {
        return static::where('name', $name)->value('id');
    }

    protected $fillable = ['name'];
}
