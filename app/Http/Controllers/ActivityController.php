<?php

namespace App\Http\Controllers;

use App\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{

    public function showAllActivities()
    {
        return response()->json(Activity::all());
    }

    public function showOneActivity($id)
    {
        return response()->json(Activity::find($id));
    }

    public function create(Request $request)
    {
        $activity = Activity::create($request->all());
        return response()->json($activity, 201);
    }

    public function update($id, Request $request)
    {
        $activity = Activity::findOrFail($id);
        $activity->update($request->all());
        return response()->json($activity, 200);
    }

    public function delete($id)
    {
        Activity::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
