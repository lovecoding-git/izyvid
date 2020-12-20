<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

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
            @csrf
            <div class="d-flex justify-content-between">
                <a href="/" class="btn btn-outline-info">Back</a>
                <button type="submit" class="btn btn-outline-success smtBtn">Submit</button>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="user_id">User</label>
                        <select name="user_id" id="user_id" class="form-control">
                            <option value="1">User 1</option>
                            <option value="2">User 2</option>
                            <option value="3">User 3</option>
                        </select>
                        <div class="form-validation-error error-user_id"></div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="category_id">Category</label>
                        <select name="category_id" id="category_id" class="form-control">
                            <option value="1">Category 1</option>
                            <option value="2">Category 2</option>
                            <option value="3">Category 3</option>
                        </select>
                        <div class="form-validation-error error-category_id"></div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="url">URL</label>
                        <input type="text" name="url" id="url" class="form-control">
                        <div class="form-validation-error error-url"></div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="custom_url">Custom Url</label>
                        <input type="text" name="custom_url" id="custom_url" class="form-control">
                        <div class="form-validation-error error-custom_url"></div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" class="form-control">
                        <div class="form-validation-error error-title"></div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" cols="10" rows="3" class="form-control"></textarea>
                        <div class="form-validation-error error-description"></div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="start_date">Start Date</label>
                        <input type="date" name="start_date" id="start_date" class="form-control">
                        <div class="form-validation-error error-start_date"></div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="start_time">Start Time</label>
                        <input type="time" name="start_time" id="start_time" class="form-control">
                        <div class="form-validation-error error-start_time"></div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="end_date">End Date</label>
                        <input type="date" name="end_date" id="end_date" class="form-control">
                        <div class="form-validation-error error-end_date"></div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="end_time">End Time</label>
                        <input type="time" name="end_time" id="end_time" class="form-control">
                        <div class="form-validation-error error-end_time"></div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control">
                        <div class="form-validation-error error-password"></div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="timezone">Timezone</label>
                        <input type="text" name="timezone" id="timezone" class="form-control">
                        <div class="form-validation-error error-timezone"></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="settings">settings</label>
                        <textarea name="settings" id="settings" cols="10" rows="3" class="form-control"></textarea>
                        <div class="form-validation-error error-settings"></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="rrule">rrule</label>
                        <textarea name="rrule" id="rrule" cols="10" rows="3" class="form-control"></textarea>
                        <div class="form-validation-error error-rrule"></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="tags">Tags</label>
                        <textarea name="tags" id="tags" cols="10" rows="3" class="form-control"></textarea>
                        <div class="form-validation-error error-tags"></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="meta_title">Meta Title</label>
                        <textarea name="meta_title" id="meta_title" cols="10" rows="3" class="form-control"></textarea>
                        <div class="form-validation-error error-meta_title"></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="meta_keywords">Meta Keywords</label>
                        <textarea name="meta_keywords" id="meta_keywords" cols="10" rows="3" class="form-control"></textarea>
                        <div class="form-validation-error error-meta_keywords"></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="meta_description">Meta Description</label>
                        <textarea name="meta_description" id="meta_description" cols="10" rows="3" class="form-control"></textarea>
                        <div class="form-validation-error error-meta_description"></div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="room_type">Room Type</label>
                        <select name="room_type" id="room_type" class="form-control">
                            <option value="stream">Stream</option>
                            <option value="private">Private</option>
                        </select>
                        <div class="form-validation-error error-room_type"></div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <br>
                        <label for="is_active">Active</label>
                        <input type="checkbox" name="is_active" id="is_active">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <br>
                        <label for="featured">Featured</label>
                        <input type="checkbox" name="featured" id="featured">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <br>
                        <label for="searchable">Searchable</label>
                        <input type="checkbox" name="searchable" id="searchable">
                    </div>
                </div>
            </div>
            <div class="stream_area">
                <h4>Event Stream</h4>
                <hr>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="stream_id">Stream ID</label>
                            <input type="text" name="stream_id" id="stream_id" class="form-control">
                            <div class="form-validation-error error-room_type"></div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="type">Type</label>
                            <input type="text" name="type" id="type" class="form-control">
                            <div class="form-validation-error error-type"></div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="webRTCViewerLimit">WebRTC Viewer Limit</label>
                            <input type="text" name="webRTCViewerLimit" id="webRTCViewerLimit" class="form-control">
                            <div class="form-validation-error error-webRTCViewerLimit"></div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="hlsViewerLimit">HLS Viewer Limit</label>
                            <input type="text" name="hlsViewerLimit" id="hlsViewerLimit" class="form-control">
                            <div class="form-validation-error error-hlsViewerLimit"></div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="endPointList">EndPoint List</label>
                            <textarea name="endPointList" id="endPointList" cols="10" rows="3" class="form-control"></textarea>
                            <div class="form-validation-error error-endPointList"></div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="listenerHookURL">Listener Hook URL</label>
                            <textarea name="listenerHookURL" id="listenerHookURL" cols="10" rows="3" class="form-control"></textarea>
                            <div class="form-validation-error error-listenerHookURL"></div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="streamUrl">Stream URL</label>
                            <textarea name="streamUrl" id="streamUrl" cols="10" rows="3" class="form-control"></textarea>
                            <div class="form-validation-error error-streamUrl"></div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="rtmpURL">RTMP URL</label>
                            <textarea name="rtmpURL" id="rtmpURL" cols="10" rows="3" class="form-control"></textarea>
                            <div class="form-validation-error error-rtmpURL"></div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <br>
                            <label for="publicStream">PublicStream</label>
                            <input type="checkbox" name="publicStream" id="publicStream">
                            <div class="form-validation-error error-publicStream"></div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <br>
                            <label for="is360">360</label>
                            <input type="checkbox" name="is360" id="is360">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <br>
                            <label for="publish">Publish</label>
                            <input type="checkbox" name="publish" id="publish">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <br>
                            <label for="status">Status</label>
                            <input type="checkbox" name="status" id="status">
                        </div>
                    </div>
                </div>
            </div>
            <div class="room_area" style="display:none;">
                <h4>Event Room</h4>
                <hr>
                <div class="form-group">
                    <label for="password_moderator">Password Moderator</label>
                    <input type="text" name="password_moderator" id="password_moderator" class="form-control">
                    <div class="form-validation-error error-password_moderator"></div>
                </div>
            </div>
        </form>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script>
    $("#room_type").change(function() {
        $(".stream_area").toggle();
        $(".room_area").toggle();
    });

    $("#submit_form").submit(function(event) {
        event.preventDefault();
        $(".smtBtn").append("...").prop("disabled", true);
        $.ajax({
            url:"/api/events",
            method: 'POST',
            data: new FormData(this),
            dataType:'JSON',
            contentType:false,
            cache:false,
            processData:false,
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
