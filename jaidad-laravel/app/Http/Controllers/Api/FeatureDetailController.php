<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\FeatureDetail;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables as DataTablesDataTables;
use Yajra\DataTables\Facades\DataTables;

class FeatureDetailController extends Controller
{
    //
    public function index()
    {
        return response(FeatureDetail::get(['id','name','feature_id']),200);
    }
    public function dataTable()
    {
        $features = FeatureDetail::with('feature');
        return DataTablesDataTables::of($features)->make(true);
    }

    public function store(Request $request)
    {
        $request->validate(['name'=>'required','feature_id'=>'numeric|min:1']);
        FeatureDetail::create($request->only('name','feature_id'));
        return response('Feature Detail Created !',201);
    }

    public function destroy(FeatureDetail $feature_detail)
    {
        if($feature_detail)
        {
            $feature_detail->delete();
            return response('A Feature Deleted',200);
        }
        else
        {
            return response('Error',400);
        }
    }
    public function update(FeatureDetail $feature_detail , Request $request)
    {
        // dd($request->all());
        $request->validate(['name'=>'required','feature_id'=>'numeric|min:1']);
        $inputs = $request->only('name','feature_id');
        $feature_detail->update($inputs);
        return response('Feature Detail Updated Successfully',200);
    }
}
