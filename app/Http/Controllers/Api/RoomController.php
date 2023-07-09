<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hotel;
use App\Models\Roomtype;
use App\Models\Room;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Hotel $hotel)
    {
        // $room = $hotel->rooms();
        $room = Room::with('hotel');
        $perpage = ($request->limit !== "null") ? (int)$request->limit : config('app.perpage');
        $search = request()->search;
        if ($search) {
            $roomData = $room->where('name', 'LIKE', "%{$search}%");
            $totalRoom = $roomData->count() . ' result for: ' . $search;
            $roomData = $roomData->latest()->paginate($perpage);
        } else {
            $totalRoom = $room->count();
            $roomData = $room->latest()->paginate($perpage);
        }
        
        return response()->json([
            'api_status'=>1,
            'success' => 1,
            'code'=>200,
            'message' => 'Successfully to get room list!',
            "status" => 200,
            "data" => [
                "total" => $totalRoom,
                "list" => $roomData
            ]
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {        
        $room = Room::create([
            'hotel_id' => $request->hotel_id,
            'roomtype_id' => $request->roomtype_id,
            'name' => $request->name,
            'slug' => $request->slug,
            'totalRooms' => $request->totalRooms,
            'capacity' => $request->capacity,
            'bedOption' => $request->bedOption,
            'price' => $request->price,
            'view' => $request->view,
            'thumbnail' => $request->thumbnail,
            'description' => $request->description,
            'available' => $request->available
        ]);
        
        return response()->json([
            "status" => 200,
            "success" => 1,
            "message" => "Success",
            "data" => [
                'room' => $room
            ]
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $room = Room::where('id', $id)->firstOrFail();
        if ($room) {
            return response()->json([
                "status" => 200,
                "success" => 1,
                "message" => 'Success',
                "data" => [
                    'room' => $room
                ]
            ]);
        } else {
            return response()->json([
                "status" => 200,
                "success" => 0,
                "message" => 'Not found',
                "data" => [
                    'room' => $room
                ]
            ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Update.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $room = Room::where('id', $id)->first(); 
        if (is_null($room)) {
            // flash message
            $success = 0;
            $message = __('app.NotFound');
            return response()->json([
                "status" => 200,
                "success" => 0,
                "message" => $message,
                "data" => [
                    'room' => $room
                ]
            ]);
        }
        $room->update([
            'hotel_id' => isset($request->hotel_id) ? $request->hotel_id : $room->hotel_id,
            'roomtype_id' => isset($request->roomtype_id) ? $request->roomtype_id : $room->roomtype_id,
            'name' => isset($request->name) ? $request->name : $room->name,
            'slug' => isset($request->slug) ? $request->slug : $room->slug,
            'totalRooms' => isset($request->totalRooms) ? $request->totalRooms : $room->totalRooms,
            'capacity' => isset($request->capacity) ? $request->capacity : $room->capacity,
            'bedOption' => isset($request->bedOption) ? $request->bedOption : $room->bedOption,
            'price' => isset($request->price) ? $request->price : $room->price,
            'view' => isset($request->view) ? $request->view : $room->view,
            'thumbnail' => isset($request->thumbnail) ? $request->thumbnail : $room->thumbnail,
            'description' => isset($request->description) ? $request->description : $room->description,
            'available' => isset($request->available) ? $request->available : $room->available
        ]); 
        // flash message
        $message = __('app.Update :name successfully.', ['name' => __('app.room')]);
        
        return response()->json([
            "status" => 200,
            "success" => 1,
            "message" => $message,
            "data" => [
                'room' => $room
            ]
        ]);
    }

    /**
     * Remove the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $room = Room::where('id', $id)->firstOrFail();
        $room->delete();
        $message = __('app.Trashed :name successfully.', ['name' =>__('app.room')]);
        
        return response()->json([
            "status" => 200,
            "success" => 1,
            "message" => $message,
            "data" => [
                'room' => $room
            ]
        ]);
    }
}