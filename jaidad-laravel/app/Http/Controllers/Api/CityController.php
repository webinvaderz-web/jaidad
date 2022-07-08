<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Feature;
use App\Models\Property;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class CityController extends Controller
{
    //
    public function index()
    {
        return response(City::all(),200);
    }
    public function dataTable()
    {
        return DataTables::eloquent(City::query())->make(true);
    }

    public function city_properties(Request $request)
    {
        return response(Property::whereCityId($request->id)->latest()->paginate(),200);
    }

    public function store(Request $request)
    {
        $request->validate(['name'=>'required']);
        City::create($request->only('name'));
        return response('City Created !',201);
    }

    public function show(City $city)
    {
        return response($city,200);
    }

    public function delete(City $city)
    {
        $present = Property::whereCityId($city->id)->first();
        if($present != null)
        {
            return response('fail',200);

        }
        else
        {
            $city->delete();
            return response('City Deleted Successfully',200);
        }

    }

    public function update(City $city, Request $request)
    {
        $request->validate(['name'=>'required']);
        $inputs = $request->only('name');
        $city->update($inputs);
        return response('City Updated Successfully',200);
    }
}
