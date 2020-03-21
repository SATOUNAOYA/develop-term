<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Calendar;


class CalendarController extends Controller
{

public function index(Request $request)
    {
        $cal = new Calendar();
        $tag = $cal->showCalendarTag($request->month,$request->year);

        return view('calendar.index', ['cal_tag' => $tag]);
    }
 public function day($day)
    {
        print_r($day);
    }
}
