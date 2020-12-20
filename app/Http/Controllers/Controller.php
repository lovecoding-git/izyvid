<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function jsonSuccess($data=[])
    {
        return response()->json($data, 200);
    }
    public function jsonError($data=[])
    {
        return response()->json($data, 422);
    }
    public function jsonExceptionError($e)
    {
        return response()->json(json_encode($e->getMessage()), 500);
    }
}
