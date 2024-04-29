<?php

namespace App\Models;

use App\Observers\TopicObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[ObservedBy(TopicObserver::class)]
class Topic extends Model
{
    use HasFactory;

    public function topic_details(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(TopicDetails::class, 'topic_id', 'id');
    }

    public function subject_group(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->belongsTo(SubjectGroup::class, 'subject_group_id', 'id');
    }
}
