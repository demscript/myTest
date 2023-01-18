<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRecordingRequest;
use App\Http\Requests\UpdateRecordingRequest;
use App\Models\Recording;

class RecordingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRecordingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRecordingRequest $request)
    {
        //
    }


    public function show()
    {
        $recordings = [
            [
                'image' => "https://picsum.photos/200/200?random=1",
                'title' => "TECNO Phantom X2 Pro 5G Review",
                'views' => "3",
                'size' => "13 MB",
                'last_modified' => "3 hours ago",

            ],
            [
                'image' => "https://picsum.photos/200/200?random=2",
                'title' => "SABINUS FIGHTS AT AN INTERVIEW",
                'views' => "8",
                'size' => "36 MB",
                'last_modified' => "1 hour ago",

            ],
            [
                'image' => "https://picsum.photos/200/200?random=3",
                'title' => "#FoundersConnect",
                'views' => "10",
                'size' => "42 MB",
                'last_modified' => "6 hours ago",

            ],
        ];
        return response()->json([
            'recordings' => $recordings
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Recording  $recording
     * @return \Illuminate\Http\Response
     */
    public function edit(Recording $recording)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRecordingRequest  $request
     * @param  \App\Models\Recording  $recording
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRecordingRequest $request, Recording $recording)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recording  $recording
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recording $recording)
    {
        //
    }
}
