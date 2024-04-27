<?php

namespace App\Observers;
use App\Models\SubjectGroup;
use Illuminate\Support\Str;

class SubjectGroupObserver
{
    /**
     * Handle the Subject "creating" event.
     */
    public function creating(SubjectGroup $subject): void
    {
        $subject->slug = Str::slug($subject->name);
    }
    /**
     * Handle the SubjectGroup "created" event.
     */
    public function created(SubjectGroup $subjectGroup): void
    {
        //
    }

    /**
     * Handle the SubjectGroup "updated" event.
     */
    public function updated(SubjectGroup $subjectGroup): void
    {
        //
    }

    /**
     * Handle the SubjectGroup "deleted" event.
     */
    public function deleted(SubjectGroup $subjectGroup): void
    {
        //
    }

    /**
     * Handle the SubjectGroup "restored" event.
     */
    public function restored(SubjectGroup $subjectGroup): void
    {
        //
    }

    /**
     * Handle the SubjectGroup "force deleted" event.
     */
    public function forceDeleted(SubjectGroup $subjectGroup): void
    {
        //
    }
}
