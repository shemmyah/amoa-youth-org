<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Carbon\Carbon;
class HomeController extends Controller
{
    public function index()
{
    // Fetch upcoming events (start_date >= now)
    $upcoming = Event::where('start_date', '>=', now())
                     ->orderBy('start_date', 'asc')
                     ->get();

    return view('pages.index', compact('upcoming'));
}
}
