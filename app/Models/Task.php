<?php

namespace App\Models;

use App\Casts\Json;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Task extends Model
{
    use HasFactory;
    // use SoftDeletes;

    public function status(): string
    {
        return $this->hasMany(TaskStatus::class, 'id', 'status_id')->value('name') ?? '';
    }

    public function scopeWhereStatus($query, $statusName)
    {
        return $query->where('status_id', TaskStatus::getIdByName($statusName));
    }

    protected $casts = [
        'tags' => Json::class
    ];

    protected $fillable = [
        'title',
        'description',
        'tags',
        'started_at',
        'finished_at',
        'status_id'
    ];
}
