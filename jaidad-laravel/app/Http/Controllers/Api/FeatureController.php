<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Feature;
use App\Models\Property;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class FeatureController extends Controller
{
    //
    public function index()
    {
        return response(Feature::all(),200);
    }
    public function dataTable()
    {
        return DataTables::eloquent(Feature::query())->make(true);
    }

    public function store(Request $request)
    {
        $request->validate(['title'=>'required','description'=>'required']);
        Feature::create($request->only('title','description'));
        return response('Feature Created !',201);
    }

    public function show(Feature $feature)
    {
        return response($feature,200);
    }

    public function delete(Feature $feature)
    {
        $present = Property::whereFeatureId($feature->id)->first();
        if($present != null)
        {
            return response('Could Not Delete Feature ! Product Assigned',400);

        }
        else
        {
            $feature->delete();
            return response('Feature Deleted Successfully',200);
        }

    }

    public function update(Feature $feature , Request $request)
    {
        $request->validate(['title'=>'required','description'=>'required']);
        $inputs = $request->only('title','description');
        $feature->update($inputs);
        return response('Feature Updated Successfully',200);
    }
}
