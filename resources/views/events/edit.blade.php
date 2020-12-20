<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <!-- Fonts -->
    <link rel="stylesheet"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .form-validation-error {
            color:red;
        }
    </style>
</head>
<body>

<div class="app">
    <div class="container py-5 my-5">
        <form action="" method="POST" id="submit_form">
            @method('PUT')
            @csrf
            <div class="d-flex justify-content-between">
                <a href="/" class="btn btn-outline-info">Back</a>
                <button type="submit" class="btn btn-outline-success smtBtn">Update</button>
            </div>
            <hr>
            <div class="row">
                <input type="hidden" id="event_id" value="{{$event->id}}">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="user_id">User</label>
                        <select name="user_id" id="user_id" class="form-control">
                            <option value="1" @if($event->user_id===1) selected @endif>User 1</option>
                            <option value="2" @if($event->user_id===2) selected @endif>User 2</option>
                            <option value="3" @if($event->user_id===3) selected @endif>User 3</option>
                        </select>
                        <div class="form-validation-error error-user_id"></div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="category_id">Category</label>
                        <select name="category_id" id="category_id" class="form-control">
                            <option value="1" @if($event->category_id===1) selected @endif>Category 1</option>
                            <option value="2" @if($event->category_id===1) selected @endif>Category 2</option>
                            <option value="3" @if($event->category_id===1) selected @endif>Category 3</option>
                        </select>
                        <div class="form-validation-error error-category_id"></div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="url">URL</label>
                        <input type="text" name="url" id="url" class="form-control" value="{{$event->url}}">
                        <div class="form-validation-error error-url"></div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="custom_url">Custom Url</label>
                        <input type="text" name="custom_url" id="custom_url" class="form-control" value="{{$event->custom_url}}">
                        <div class="form-validation-error error-custom_url"></div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" class="form-control"  value="{{$event->title}}">
                        <div class="form-validation-error error-title"></div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" cols="10" rows="3" class="form-control">{{$event->description}}</textarea>
                        <div class="form-validation-error error-description"></div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="start_date">Start Date</label>
                        <input type="date" name="start_date" id="start_date" class="form-control" value="{{$event->start_date}}">
                        <div class="form-validation-error error-start_date"></div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="start_time">Start Time</label>
                        <input type="time" name="start_time" id="start_time" class="form-control" value="{{$event->start_time}}">
                        <div class="form-validation-error error-start_time"></div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="end_date">End Date</label>
                        <input type="date" name="end_date" id="end_date" class="form-control" value="{{$event->end_date}}">
                        <div class="form-validation-error error-end_date"></div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="end_time">End Time</label>
                        <input type="time" name="end_time" id="end_time" class="form-control" value="{{$event->end_time}}">
                        <div class="form-validation-error error-end_time"></div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control" value="{{$event->password}}">
                        <div class="form-validation-error error-password"></div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="timezone">Timezone</label>
                        <input type="text" name="timezone" id="timezone" class="form-control" value="{{$event->timezone}}">
                        <div class="form-validation-error error-timezone"></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="settings">settings</label>
                        <textarea name="settings" id="settings" cols="10" rows="3" class="form-control">{{$event->settings}}</textarea>
                        <div class="form-validation-error error-settings"></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="rrule">rrule</label>
                        <textarea name="rrule" id="rrule" cols="10" rows="3" class="form-control">{{$event->rrule}}</textarea>
                        <div class="form-validation-error error-rrule"></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="tags">Tags</label>
                        <textarea name="tags" id="tags" cols="10" rows="3" class="form-control">{{$event->tags}}</textarea>
                        <div class="form-validation-error error-tags"></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="meta_title">Meta Title</label>
                        <textarea name="meta_title" id="meta_title" cols="10" rows="3" class="form-control">{{$event->meta->meta_title}}</textarea>
                        <div class="form-validation-error error-meta_title"></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="meta_keywords">Meta Keywords</label>
                        <textarea name="meta_keywords" id="meta_keywords" cols="10" rows="3" class="form-control">{{$event->meta->meta_keywords}}</textarea>
                        <div class="form-validation-error error-meta_keywords"></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="meta_description">Meta Description</label>
                        <textarea name="meta_description" id="meta_description" cols="10" rows="3" class="form-control">{{$event->meta->meta_description}}</textarea>
                        <div class="form-validation-error error-meta_description"></div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="room_type">Room Type</label>
                        <select name="room_type" id="room_type" class="form-control">
                            <option value="stream" @if($event->room_type==='stream') selected @endif>Stream</option>
                            <option value="private" @if($event->room_type==='private') selected @endif>Private</option>
                        </select>
                        <div class="form-validation-error error-room_type"></div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <br>
                        <label for="is_active">Active</label>
                        <input type="checkbox" name="is_active" id="is_active" @if($event->is_active) checked @endif>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <br>
                        <label for="featured">Featured</label>
                        <input type="checkbox" name="featured" id="featured" @if($event->featured) checked @endif>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <br>
                        <label for="searchable">Searchable</label>
                        <input type="checkbox" name="searchable" id="searchable" @if($event->searchable) checked @endif>
                    </div>
                </div>
            </div>
            <div class="stream_area" style="display:@if($event->room_type==='stream') block @else none @endif">
                <h4>Event Stream</h4>
                <hr>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="stream_id">Stream ID</label>
                            <input type="text" name="stream_id" id="stream_id" class="form-control" value="{{$event->stream->stream_id}}">
                            <div class="form-validation-error error-room_type"></div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="type">Type</label>
                            <input type="text" name="type" id="type" class="form-control" value="{{$event->stream->type}}">
                            <div class="form-validation-error error-type"></div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="webRTCViewerLimit">WebRTC Viewer Limit</label>
                            <input type="text" name="webRTCViewerLimit" id="webRTCViewerLimit" class="form-control" value="{{$event->stream->webRTCViewerLimit}}">
                            <div class="form-validation-error error-webRTCViewerLimit"></div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="hlsViewerLimit">HLS Viewer Limit</label>
                            <input type="text" name="hlsViewerLimit" id="hlsViewerLimit" class="form-control" value="{{$event->stream->hlsViewerLimit}}">
                            <div class="form-validation-error error-hlsViewerLimit"></div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="endPointList">EndPoint List</label>
                            <textarea name="endPointList" id="endPointList" cols="10" rows="3" class="form-control">{{$event->stream->endPointList}}</textarea>
                            <div class="form-validation-error error-endPointList"></div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="listenerHookURL">Listener Hook URL</label>
                            <textarea name="listenerHookURL" id="listenerHookURL" cols="10" rows="3" class="form-control">{{$event->stream->listenerHookURL}}</textarea>
                            <div class="form-validation-error error-listenerHookURL"></div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="streamUrl">Stream URL</label>
                            <textarea name="streamUrl" id="streamUrl" cols="10" rows="3" class="form-control">{{$event->stream->streamUrl}}</textarea>
                            <div class="form-validation-error error-streamUrl"></div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="rtmpURL">RTMP URL</label>
                            <textarea name="rtmpURL" id="rtmpURL" cols="10" rows="3" class="form-control">{{$event->stream->rtmpURL}}</textarea>
                            <div class="form-validation-error error-rtmpURL"></div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <br>
                            <label for="publicStream">PublicStream</label>
                            <input type="checkbox" name="publicStream" id="publicStream" value="{{$event->stream->publicStream}}">
                            <div class="form-validation-error error-publicStream"></div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <br>
                            <label for="is360">360</label>
                            <input type="checkbox" name="is360" id="is360" @if($event->stream->is360) checked @endif>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <br>
                            <label for="publish">Publish</label>
                            <input type="checkbox" name="publish" id="publish" @if($event->stream->publish) checked @endif>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <br>
                            <label for="status">Status</label>
                            <input type="checkbox" name="status" id="status"  @if($event->stream->status) checked @endif>
                        </div>
                    </div>
                </div>
            </div>
            <div class="room_area"  style="display:@if($event->room_type!=='stream') block @else none @endif">
                <h4>Event Room</h4>
                <hr>
                <div class="form-group">
                    <label for="password_moderator">Password Moderator</label>
                    <input type="text" name="password_moderator" id="password_moderator" class="form-control" value="{{$event->room->password_moderator}}">
                    <div class="form-validation-error error-password_moderator"></div>
                </div>
            </div>
        </form>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>

<script>
    $("#room_type").change(function() {
        $(".stream_area").toggle();
        $(".room_area").toggle();
    });

    $("#submit_form").submit(function(event) {
        event.preventDefault();

        $(".smtBtn").append("...").prop("disabled", true);
        $.ajax({
            url:`/api/events/${$("#event_id").val()}`,
            type:'PUT',
            data: {
                'user_id': $("#user_id").val(),
                'category_id':$("#category_id").val(),
                'url':$("#url").val(),
                'custom_url':$("#custom_url").val(),
                'title':$("#title").val(),
                'description':$("#description").val(),
                'start_date':$("#start_date").val(),
                'start_time':$("#start_time").val(),
                'end_date':$("#end_date").val(),
                'end_time':$("#end_time").val(),
                'password':$("#password").val(),
                'timezone':$("#timezone").val(),
                'settings':$("#settings").val(),
                'rrule':$("#rrule").val(),
                'meta_title':$("#meta_title").val(),
                'meta_keywords':$("#meta_keywords").val(),
                'meta_description':$("#meta_description").val(),
                'room_type':$("#room_type").val(),
                'is_active':$("#is_active").prop("checked")===true?1:0,
                'featured':$("#featured").prop("checked")===true?1:0,
                'searchable':$("#searchable").prop("checked")===true?1:0,
                'stream_id':$("#stream_id").val(),
                'type':$("#type").val(),
                'webRTCViewerLimit':$("#webRTCViewerLimit").val(),
                'hlsViewerLimit':$("#hlsViewerLimit").val(),
                'endPointList':$("#endPointList").val(),
                'listenerHookURL':$("#listenerHookURL").val(),
                'streamUrl':$("#streamUrl").val(),
                'rtmpURL':$("#rtmpURL").val(),
                'publicStream':$("#publicStream").val(),
                'is360':$("#is360").prop("checked")===true?1:0,
                'publish':$("#publish").prop("checked")===true?1:0,
                'status':$("#status").prop("checked")===true?1:0,
                'password_moderator':$("#password_moderator").val(),
            },
            success: function(result)
            {
                $(".smtBtn").html("Submit").prop("disabled", false);
                $(".form-validation-error").html("");
                console.log(result);
                alert("success");
                window.location.href="/"
            },
            error: function(data)
            {
                $(".smtBtn").html("Submit").prop("disabled", false);
                if(data.status === 422)
                {
                    $(".form-validation-error").html("");
                    var errors = $.parseJSON(data.responseText);
                    $.each(errors, function (key, value) {
                        $(`.error-${key}`).html(value);
                    });
                }else {
                    console.log(data);
                }
            }
        });
    });
</script>
</body>
</html>
