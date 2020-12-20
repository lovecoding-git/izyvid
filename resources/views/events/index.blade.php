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
            table {
                width: 100%;
                table-layout: fixed;
            }
            td:first-child {
                width: 80% ;
                white-space: normal;
            }
        </style>
    </head>
<body>

<div class="app">
    <div class="container py-5 my-5">
        <div class="d-flex justify-content-between">
            <h2>All Events</h2>
            <a href="/events/create" class="btn btn-outline-success mb-2">Create Event</a>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <tbody class="result_area">
                    <tr><td colspan="2">Loading...</td></tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<script>

    $(function () {
        $.ajax({
            url:"/api/events",
            type:"get",
            success:function(result)
            {
                $(".result_area").html("");
                console.log(result);
                $.each(result, function(key, value) {
                    $(".result_area").append(`
                        <tr><td>${JSON.stringify(value)}</td><td><a href='/events/${value.id}/edit' class='btn btn-success'>Edit</a></td></td>
                    `)
                })
            },
            error:function(e) {
                console.log(e);
            }
        })
    });
</script>
</body>
</html>
