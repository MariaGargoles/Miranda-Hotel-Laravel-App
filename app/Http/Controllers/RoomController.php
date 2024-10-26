<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class RoomController extends Controller
{
    public function index(Request $request)
    {
        $checkIn = $request->query('checkIn');
        $checkOut = $request->query('checkOut');

        if ($checkIn && $checkOut) {
            $rooms = Room::available($checkIn, $checkOut)->get();
        } else {
            $rooms = Room::with(['bookings', 'amenities', 'photos'])->get();
        }

        return view('miranda.rooms.index', ['rooms' => $rooms, 'checkIn' => $checkIn, 'checkOut' => $checkOut]);
    }

    public function show(string $id)
    {
        $room = Room::with(['bookings', 'amenities', 'photos'])->findOrFail($id);
        $rooms = Room::with(['bookings', 'amenities', 'photos'])->get();
        return view('miranda.rooms.room-details', ['rooms' => $rooms, 'room' => $room]);
    }
}
