<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;

class EventsController extends Controller
{
    public function create()
    {
        return view('admin.add-event');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'link' => 'nullable|string|max:255',
            'images' => 'nullable|array|max:5',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        $link = trim($request->link);

        if ($link && !preg_match('~^https?://~i', $link)) {
            $link = 'https://' . $link;
        }


        $base64Images = [];

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $base64Images[] =
                    'data:' . $image->getMimeType() . ';base64,' .
                    base64_encode(file_get_contents($image->getRealPath()));
            }
        }

        Event::create([
            'title' => $request->title,
            'description' => $request->description,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'link' => $request->link,
            'images' => $base64Images,
        ]);

        return back()->with('success', 'Event added successfully!');
    }



    public function edit(Event $event)
    {
        return view('admin.events.edit', compact('event'));
    }

    // Update event
    public function update(Request $request, Event $event)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'link' => 'nullable|string|max:255',
            'images' => 'nullable|array|max:5',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        $link = trim($request->link);

        if ($link && !preg_match('~^https?://~i', $link)) {
            $link = 'https://' . $link;
        }

        $images = $event->images ?? [];

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                if (count($images) >= 5)
                    break;

                $images[] =
                    'data:' . $image->getMimeType() . ';base64,' .
                    base64_encode(file_get_contents($image->getRealPath()));
            }
        }

        $event->update([
            'title' => $request->title,
            'description' => $request->description,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'link' => $request->link,
            'images' => $images,
        ]);

        return redirect()->route('admin.dashboard')
            ->with('success', 'Event updated successfully.');
    }



    // Delete event
    public function destroy(Event $event)
    {
        $event->delete();

        return redirect()->route('admin.dashboard')->with('success', 'Event deleted successfully.');
    }
}
