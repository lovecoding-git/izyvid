<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Event extends Model
{
    protected $table = 'events';
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function storeRule($request)
    {
        $rule = [];
        $rule['user_id'] = 'required';
        $rule['url'] = 'required|unique:events,url';
        $rule['custom_url'] = 'required|unique:events,custom_url';
        $rule['title'] = 'required';
        $rule['timezone'] = 'required';
        $rule['room_type'] = 'required';
        if($request->room_type==='stream')
        {
            $rule['stream_id'] = 'required';
            $rule['type'] = 'required';
            $rule['rtmpURL'] = 'required';
            $rule['webRTCViewerLimit'] = 'required';
            $rule['hlsViewerLimit'] = 'required';
        }else {
            $rule['password_moderator'] = 'required';
        }
        return $rule;
    }
    public function updateRule($request, $id)
    {
        $rule = [];
        $rule['user_id'] = 'required';
        $rule['url'] = 'required|unique:events,url,'.$id;
        $rule['custom_url'] = 'required|unique:events,custom_url,'.$id;
        $rule['title'] = 'required';
        $rule['timezone'] = 'required';
        $rule['room_type'] = 'required';

        if($request->room_type==='stream')
        {
            $rule['stream_id'] = 'required';
            $rule['type'] = 'required';
            $rule['rtmpURL'] = 'required';
            $rule['webRTCViewerLimit'] = 'required';
            $rule['hlsViewerLimit'] = 'required';
        }else {
            $rule['password_moderator'] = 'required';
        }
        return $rule;
    }
    public function mergeAttributes($request)
    {
        \Log::info($request->is_active);
        \Log::info($request->featured);
        $request->merge(['is_active'=>$request->is_active?1:0]);
        $request->merge(['featured'=>$request->featured?1:0]);
        $request->merge(['searchable'=>$request->searchable?1:0]);
        $request->merge(['is360'=>$request->is360?1:0]);
        $request->merge(['publicStream'=>$request->publicStream?1:0]);
        $request->merge(['publish'=>$request->publish?1:0]);
        $request->merge(['status'=>$request->status?1:0]);

        return $request;
    }
    public function storeItem($request)
    {
        //event item save
        $request = $this->mergeAttributes($request);

       $event = Event::create($request->all());
        //meta save

        EventMeta::create([
            'event_id'=>$event->id,
            'meta_title'=>$request->meta_title,
            'meta_keywords'=>$request->meta_keywords,
            'meta_description'=>$request->meta_description,
        ]);

        if($request->room_type==='stream')
        {
            //stream save
            EventStream::create([
                'event_id'=>$event->id,
                'user_id'=>$request->user_id,
                'stream_id'=>$request->stream_id,
                'type'=>$request->type,
                'webRTCViewerLimit'=>$request->webRTCViewerLimit,
                'hlsViewerLimit'=>$request->hlsViewerLimit,
                'endPointList'=>$request->endPointList,
                'listenerHookURL'=>$request->listenerHookURL,
                'streamUrl'=>$request->streamUrl,
                'rtmpURL'=>$request->rtmpURL,
                'publicStream'=>$request->publicStream,
                'is360'=>$request->is360,
                'publish'=>$request->publish,
                'status'=>$request->status,
            ]);

        }else {
            //room save
            EventRoom::create([
                'event_id'=>$event->id,
                'user_id'=>$request->user_id,
                'password_moderator'=>$request->password_moderator,
            ]);
        }
    }
    public function updateItem($request)
    {
        //event item save
        $request = $this->mergeAttributes($request);

        $this->update($request->all());
        //meta save
        EventMeta::updateOrCreate(
            ['event_id'=>$this->id],
            [
                'meta_title'=>$request->meta_title,
                'meta_keywords'=>$request->meta_keywords,
                'meta_description'=>$request->meta_description,
            ]
        );
        if($request->room_type==='stream')
        {
            EventStream::updateOrCreate(
                ['event_id'=>$this->id],
                [
                    'user_id'=>$request->user_id,
                    'stream_id'=>$request->stream_id,
                    'type'=>$request->type,
                    'webRTCViewerLimit'=>$request->webRTCViewerLimit,
                    'hlsViewerLimit'=>$request->hlsViewerLimit,
                    'endPointList'=>$request->endPointList,
                    'listenerHookURL'=>$request->listenerHookURL,
                    'streamUrl'=>$request->streamUrl,
                    'rtmpURL'=>$request->rtmpURL,
                    'publicStream'=>$request->publicStream,
                    'is360'=>$request->is360,
                    'publish'=>$request->publish,
                    'status'=>$request->status,
                ]
            );
            $this->room()->delete();

        }else {
            EventRoom::updateOrCreate(
                ['event_id'=>$this->id],
                [
                    'user_id'=>$request->user_id,
                    'password_moderator'=>$request->password_moderator,
                ]
            );
            $this->stream()->delete();
        }
    }
    /**
     * @return HasOne
     */
    public function meta(): HasOne
    {
        return $this->hasOne(EventMeta::class, 'event_id')->withDefault();
    }

        /**
     * @return HasOne
     */
    public function stream(): HasOne
    {
        return $this->hasOne(EventStream::class, 'event_id')->withDefault();
    }

    /**
     * @return HasOne
     */
    public function room(): HasOne
    {
        return $this->hasOne(EventRoom::class, 'event_id')->withDefault();
    }

    /**
     * @return HasOne
     */
    public function venue(): HasOne
    {
        return $this->hasOne(EventVenue::class, 'event_id')->withDefault();
    }
}
