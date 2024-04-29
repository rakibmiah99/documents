<?php

namespace App\Models;

use App\Observers\SubjectObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[ObservedBy([SubjectObserver::class])]
class Subject extends Model
{
    use HasFactory;

    public function getIconClassAttribute(): string
    {
        return $this->icon_type." ".$this->icon;
    }

    public function subject_groups(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(SubjectGroup::class, 'subject_id', 'id');
    }

    public function topics(){
        return $this->hasManyThrough(
          Topic::class,
          SubjectGroup::class,
          'subject_id',
                'subject_group_id'
        );
    }
}
