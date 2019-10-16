<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(Message $message)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message)
    {
        //
    }


    /**
     * Search for messages\
     * 
     * @params $search_phrase
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $search_phrase = $request->input("phrase");
        $messages = Message::search($search_phrase)
        ->with([
            'hitsPerPage' => 30,
            'attributesToRetrieve' => ['*'],
            // 'attributesToHighlight' => ['message'],
            'typoTolerance' => true,
        ])->paginate(3);
        $messages_count = Message::search($search_phrase)->count();
        // dd($messages);
        return response()->json([
            "messages" => $messages,
            "results_count" => $messages_count,
            "messages_total" => Message::count()
        ], 200);
    }
}
