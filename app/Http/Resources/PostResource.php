<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'tags' => $this->when($this->tags->whereIn('name', ['perferendis', 'sed'])->pluck('name')->isNotEmpty(), function () {
                return $this->tags->whereIn('name', ['perferendis', 'sed'])->pluck('name');
            }),
            'comments' => CommentResource::collection($this->whenLoaded('comments')),
            'comments_count' => $this->whenCounted('comments'),
        ];
    }
}
