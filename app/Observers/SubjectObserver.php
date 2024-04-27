<?php

namespace App\Observers;

use App\Models\Subject;
use Illuminate\Support\Str;

class SubjectObserver
{
    /**
     * Handle the Subject "creating" event.
     */
    public function creating(Subject $subject): void
    {
        $subject->slug = Str::slug($subject->name);
    }

    /**
     * Handle the Subject "created" event.
     */
    public function created(Subject $subject): void
    {
        //
    }

    /**
     * Handle the Subject "updated" event.
     */
    public function updated(Subject $subject): void
    {
        //
    }

    /**
     * Handle the Subject "deleted" event.
     */
    public function deleted(Subject $subject): void
    {
        //
    }

    /**
     * Handle the Subject "restored" event.
     */
    public function restored(Subject $subject): void
    {
        //
    }

    /**
     * Handle the Subject "force deleted" event.
     */
    public function forceDeleted(Subject $subject): void
    {
        //
    }
}
