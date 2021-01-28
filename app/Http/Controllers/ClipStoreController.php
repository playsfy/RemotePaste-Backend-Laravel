<?php

namespace App\Http\Controllers;

use App\Models\ClipStore;
use Illuminate\Http\Request;
use Response;

class ClipStoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ClipStore::paginate(15);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new ClipStore;

        $data->userId     =  $request->duserID; 
        $data->clipups    = $request->data;

        if($data->save()){

             return response()->json([
                'status'  => 200,
                'data'    => $data,
                'message' => 'data added successful..'
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ClipStore  $clipStore
     * @return \Illuminate\Http\Response
     */
    public function show(ClipStore $clipStore)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ClipStore  $clipStore
     * @return \Illuminate\Http\Response
     */
    public function edit(ClipStore $clipStore)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ClipStore  $clipStore
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ClipStore $clipStore)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ClipStore  $clipStore
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClipStore $clipStore)
    {
        //
    }
}
