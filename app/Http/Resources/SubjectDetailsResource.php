<?php

namespace App\Http\Resources;

use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SubjectDetailsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $subject_group = $this->subject_groups;
        $first_topic = $subject_group?->first()?->topics?->first();
        return [
            'id' => $this->id,
            'name' => $this->name,
            'slug' => $this->slug,
            'subject_groups' => SubjectGroupResource::collection($subject_group),
            /*'first_topic_details' => [
                'topic' => TopicResource::make($first_topic),
                'details' => TopicDetailsResource::collection($first_topic->topic_details)
            ]*/
        ];
    }
}
