<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TopicDetailPageResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'name' => $this->name,
            'slug' => $this->slug,
            'description' => $this->description,
            'previous' => $this->previous ? [
                'name' => $this->previous->name,
                'slug' => $this->previous->slug,
            ] : null,
            'next' => $this->next ? [
                'name' => $this->next->name,
                'slug' => $this->next->slug,
            ]: null,
            'topics' => TopicDetailsResource::collection($this->topic_details)
        ];
        return parent::toArray($request);
    }
}
