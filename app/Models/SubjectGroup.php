<?php

namespace App\Models;

use App\Observers\SubjectGroupObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
#[ObservedBy(SubjectGroupObserver::class)]
class SubjectGroup extends Model
{
    use HasFactory;

    public function topics(){
        return $this->hasMany(Topic::class, 'subject_group_id', 'id');
    }
}
