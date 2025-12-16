<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Carbon\Carbon;

class EventController extends Controller
{
    public function index()
    {
        $now = Carbon::now();

        $upcoming = Event::where('start_date', '>=', $now)
            ->orderBy('start_date', 'asc')
            ->get();

        $past = Event::where('start_date', '<', $now)
            ->orderBy('start_date', 'desc')
            ->get();

        return view('pages.events', compact('upcoming', 'past'));
    }
}
