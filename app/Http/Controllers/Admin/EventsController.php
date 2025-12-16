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
        // Validate
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'link' => 'nullable|url',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048', // each image max 2MB
        ]);

        // Create event
        $event = new Event();
        $event->title = $request->title;
        $event->description = $request->description;
        $event->start_date = $request->start_date;
        $event->end_date = $request->end_date;
        $event->link = $request->link;
        $event->images = []; // initialize empty array
        $event->save();

        // Handle images
        if ($request->hasFile('images')) {
            $images = $request->file('images');
            $storedImages = [];

            foreach ($images as $img) {
                if ($img && count($storedImages) < 5) { // limit to 5 images
                    $path = $img->store('events', 'public');
                    $storedImages[] = $path;
                }
            }

            $event->images = $storedImages;
            $event->save();
        }

        return redirect()->back()->with('success', 'Event added successfully!');
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
            'link' => 'nullable|url',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        $data = $request->only(['title', 'description', 'start_date', 'end_date', 'link']);

        if ($request->hasFile('images')) {
            $images = $event->images ?? [];
            foreach ($request->file('images') as $img) {
                if (count($images) >= 5)
                    break;
                $path = $img->store('events', 'public');
                $images[] = $path;
            }
            $data['images'] = $images;
        }

        $event->update($data);

        return redirect()->route('admin.dashboard')->with('success', 'Event updated successfully.');
    }


    // Delete event
    public function destroy(Event $event)
    {
        $event->delete();

        return redirect()->route('admin.dashboard')->with('success', 'Event deleted successfully.');
    }
}
