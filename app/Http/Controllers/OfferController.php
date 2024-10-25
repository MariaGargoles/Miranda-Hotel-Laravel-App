<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function index()
    {
        $rooms = Room::with(['bookings', 'amenities', 'photos'])->get();
        return view('miranda.offer', compact('rooms'));
    }

    public function show(string $id)
    {
        $rooms = Room::with(['bookings', 'amenities', 'photos'])->get();
        $room = Room::with(['bookings', 'amenities', 'photos'])->findOrFail($id);
        return view('miranda.rooms.room-details', ['rooms' => $rooms , 'room' => $room]);
    }
}
