<?php

namespace App\Http\Resources;

use App\Enums\TagEnum;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'tags' => $this->whenLoaded('tags') ? TagResource::collection($this->tags->where('name', TagEnum::WORK)) : [],
            'comments' => CommentResource::collection($this->whenLoaded('comments')),
            'comments_count' => $this->whenCounted('comments'),
        ];
    }
}
