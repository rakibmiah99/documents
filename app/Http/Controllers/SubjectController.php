<?php

namespace App\Http\Controllers;

use App\Http\Resources\SubjectDetailsResource;
use App\Http\Resources\SubjectResource;
use App\Http\Resources\TopicDetailPageResource;
use App\Http\Resources\TopicDetailsResource;
use App\Models\Subject;
use App\Http\Requests\StoreSubjectRequest;
use App\Http\Requests\UpdateSubjectRequest;
use App\Models\Topic;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
//        sleep(5);
        $subjects = Subject::get();
        return SubjectResource::collection($subjects);
    }

    public function subjectDetails($subject){
        $data =  Subject::where('slug', $subject)
            ->with('subject_groups.topics')
            ->first();
        return SubjectDetailsResource::make($data);
    }

    public function topicDetails($subject, $topic){

        $topics = Subject::where('slug', $subject)->first()->topics;
        $topics_slug = $topics->pluck('slug');
        $topic_index =  $topics_slug->search($topic);
        $previous = $topic_index - 1 < 0 ? null : $topics_slug[$topic_index - 1];
        $next = $topics_slug[$topic_index + 1];
        $data = $topics;
        if ($topic != 'default'){
            $data =  $data->where('slug', $topic);
        }
        $data = $data->first();
        $data->previous = $topics->where('slug', $previous)->first();
        $data->next = $topics->where('slug', $next)->first();
        return TopicDetailPageResource::make($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSubjectRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Subject $subject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subject $subject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSubjectRequest $request, Subject $subject)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subject $subject)
    {
        //
    }
}
