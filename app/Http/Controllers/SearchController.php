<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\App;

class SearchController extends Controller
{
    public function index()
    {
        $attributes = request()->validate([
            'startDate' => 'required|string',
            'endDate' => 'required|string',
            'startDateTime' => 'required|string',
            'endDateTime' => 'required|string',
            'language' => 'string'
        ]);
        $attributes['startDate'] = new Carbon($attributes['startDate']);
        $attributes['endDate'] = new Carbon($attributes['endDate']);
        $attributes['startDateTime'] = str_replace(':','',$attributes['startDateTime']);
        $attributes['endDateTime'] = str_replace(':','',$attributes['endDateTime']);
        $url = "https://northbound.test/" . $attributes['language'] . "/search?start=" . $attributes['startDate']->format('Y-m-d') . "&start-time=" . $attributes['startDateTime'] . "&end=" . $attributes['endDate']->format('Y-m-d') . "&end-time=" . $attributes['endDateTime'] . "&o=recommended&c=4x4";
        return redirect($url);
    }
}
