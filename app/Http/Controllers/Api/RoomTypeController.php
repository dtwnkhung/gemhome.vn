<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Roomtype;

class RoomTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $roomtype = Roomtype::with('rooms');
        $perpage = ($request->limit !== "null") ? (int)$request->limit : config('app.perpage');
        $search = request()->search;
        if ($search) {
            $roomtypeData = $roomtype->where('name', 'LIKE', "%{$search}%");
            $totalRoomType = $roomtypeData->count() . ' result for: ' . $search;
            $roomtypeData = $roomtypeData->latest()->paginate($perpage);
        } else {
            $totalRoomType = $roomtype->count();
            $roomtypeData = $roomtype->latest()->paginate($perpage);
        }
        
        return response()->json([
            'api_status'=>1,
            'success' => 1,
            'code'=>200,
            'message' => 'Successfully to get roomtype list!',
            "status" => 200,
            "data" => [
                "total" => $totalRoomType,
                "list" => $roomtypeData
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
        $roomtype = Roomtype::create([
            'name' => $request->name,
            'max_adults' => $request->max_adults,
            'max_kids' => $request->max_kids,
            'description' => $request->description
        ]);
        
        return response()->json([
            "status" => 200,
            "success" => 1,
            "message" => "Success",
            "data" => [
                'roomtype' => $roomtype
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
        $roomtype = Roomtype::where('id', $id)->firstOrFail();
        if ($roomtype) {
            return response()->json([
                "status" => 200,
                "success" => 1,
                "message" => 'Success',
                "data" => [
                    'roomtype' => $roomtype
                ]
            ]);
        } else {
            return response()->json([
                "status" => 200,
                "success" => 0,
                "message" => 'Not found',
                "data" => [
                    'roomtype' => $roomtype
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
        $roomtype = Roomtype::where('id', $id)->first(); 
        if (is_null($roomtype)) {
            // flash message
            $success = 0;
            $message = __('app.NotFound');
            return response()->json([
                "status" => 200,
                "success" => 0,
                "message" => $message,
                "data" => [
                    'roomtype' => $roomtype
                ]
            ]);
        }


        $roomtype->update([
            'name' => isset($request->name) ? $request->name : $roomtype->name,
            'max_adults' => isset($request->max_adults) ? $request->max_adults : $roomtype->max_adults,
            'max_kids' => isset($request->max_kids) ? $request->max_kids : $roomtype->max_kids,
            'description' => isset($request->description) ? $request->description : $roomtype->description
        ]); 
        // flash message
        $message = __('app.Update :name successfully.', ['name' => __('app.roomtype')]);
        
        return response()->json([
            "status" => 200,
            "success" => 1,
            "message" => $message,
            "data" => [
                'roomtype' => $roomtype
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
        $roomtype = Roomtype::where('id', $id)->firstOrFail();
        $roomtype->delete();
        $message = __('app.Delete :name successfully.', ['name' =>__('app.roomtype')]);
        
        return response()->json([
            "status" => 200,
            "success" => 1,
            "message" => $message,
            "data" => [
                'roomtype' => $roomtype
            ]
        ]);
    }
}