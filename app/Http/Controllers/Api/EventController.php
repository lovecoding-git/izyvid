<?php

namespace App\Http\Controllers\Api;

use App\Event;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;

class EventController extends Controller
{

    /**
     * @var
     */
    public $model;

    /**
     * Create a new controller instance.
     *
     * @param Event $model
     */
    public function __construct(Event $model)
    {
        $this->model = $model;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $events = $this->model->with([
                'meta:event_id,meta_title,meta_keywords,meta_description',
                'stream:event_id,stream_id,type,endPointList,listenerHookURL,streamUrl',
                'room:event_id,password_moderator',
            ])
                ->get(['id', 'title', 'room_type'])
                ->map(function($event) {
                    if($event->room_type==='stream')
                    {
                        $event->unsetRelation("room");
                    }else {
                        $event->unsetRelation("stream");
                    }
                    return $event;
                });

            return $this->jsonSuccess($events);

        }catch(\Exception $e)
        {
            return $this->jsonExceptionError($e);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $validation = Validator::make(
                $request->all(),$this->model->storeRule($request)
            ); //input values validation

            if($validation->fails())
                return $this->jsonError($validation->errors()); //if validation is failed, then return errors

            $this->model->storeItem($request); // store event

            return $this->jsonSuccess(); //return success

        }catch(\Exception $e)
        {
            return $this->jsonExceptionError($e); // exception error
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $validation = Validator::make(
                $request->all(),$this->model->updateRule($request, $id)
            ); //input values validation

            if($validation->fails())
                return $this->jsonError($validation->errors()); //if validation is failed, then return errors

            $this->model->findorfail($id)->updateItem($request); // update event

            return $this->jsonSuccess(); //return success

        }catch(\Exception $e)
        {
            return $this->jsonExceptionError($e); // exception error
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
