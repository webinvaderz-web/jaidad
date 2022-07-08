<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Enquiry;
use App\Models\FeatureDetail;
use App\Models\Property;
use App\Models\PropertyFeatureDetail;
use App\Models\PropertyGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Yajra\DataTables\Facades\DataTables as DataTables;

class PropertyController extends Controller
{
    public function dashboard()
    {
        $data = [
            'properties_count' => count(Property::get()),
            'properties_sale'  => count(Property::whereType('sale')->get()),
            'properties_rent'  => count(Property::whereType('rent')->get()),
            'properties_featured'  => count(Property::whereFeatureId(1)->get()),
        ];
        return response($data,200);
    }
    public function index()
    {
        return response()->json(Property::with('property_gallery','features')->paginate(),200);
    }
    public function dataTable($id,$user_type)
    {
        if($user_type == 0)
        {
            return DataTables::eloquent(Property::query())->make(true);
        }
        else
        {
            return DataTables::eloquent(Property::whereAgentId($id))->make(true);
        }

    }

    public function show(Property $property)
    {
        if($property != null)
        {
            $property->load(['property_gallery','features','feature_details']);

            return response($property,200);
        }
        else
        {
            return response('No Record Found',404);
        }

    }

    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'price'=>'required',
            'property_type'=>'required',
            'type'=>'required',
            'bedrooms'=>'required',
            'bathrooms'=>'required',
            'parking_spaces'=>'required',
            'area'=>'required',
            'year_built'=>'required',
            'plot_size_prefix'=>'required',
            'plot_size'=>'required',
            'featured_image'=>'required|mimes:png,jpg,jpeg,webp'
        ]);
        $inputs = $request->except('_token','property_id','featured_image','image_gallery','feature_detail_ids');
        $property = Property::create($inputs);
        $property->feature_details()->sync($request->feature_detail_ids);
        $data = [];
        if($request->hasFile('featured_image'))
        {
            $featured_image = $request->file('featured_image');
            $featuredImageName = time().$featured_image->getClientOriginalName();
            $featured_image->move(public_path('uploads'),$featuredImageName);
        }
        if($request->hasFile('image_gallery'))
        {
            foreach($request->file('image_gallery') as $image)
            {
                $name = time().$image->getClientOriginalName();
                $image->move(public_path('uploads'),$name);
                $data[] = $name;
            }
        }

        $property_gallery = PropertyGallery::create(
            [
                'property_id'       =>  $property->id,
                'featured_image'    =>  $featuredImageName,
                'image_gallery'     =>  $data != null ? json_encode($data) : null,
            ]);


        return $property && $property_gallery  != null
        ? response('Property Created Successfully',201) : response('Property Not created successfully',400);
    }

    public function update(Property $property,Request $request)
    {
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'price'=>'required',
            'property_type'=>'required',
            'type'=>'required',
            'bedrooms'=>'required',
            'bathrooms'=>'required',
            'parking_spaces'=>'required',
            'area'=>'required',
            'year_built'=>'required',
            'plot_size_prefix'=>'required',
            'plot_size'=>'required',
            // 'featured_image'=>'required|mimes:png,jpg,jpeg,webp'
        ]);
        // dd($request->all());
        $input = $request->except('_method','featured_image','image_gallery');

        if(count($input)>0)
        {
            $property->update($input);
        }

        // dd($property);
        if($request->hasFile('featured_image'))
        {
            $featured_image = PropertyGallery::wherePropertyId($property->id)->first()->featured_image;
            $path = public_path('uploads//').$featured_image;
            if(File::exists($path))
            {
                File::delete($path);
            }
            $featured_image = $request->file('featured_image');
            $featuredImageName = time().$featured_image->getClientOriginalName();
            $featured_image->move(public_path('uploads'),$featuredImageName);
            PropertyGallery::wherePropertyId($property->id)->update(['featured_image'=> $featuredImageName]);
        }
        if($request->hasFile('image_gallery'))
        {
            $image_gallery = PropertyGallery::wherePropertyId($property->id)->first()->image_gallery;
            foreach(json_decode($image_gallery) as $image)
            {
                $path = public_path('uploads//').$image;
                if(File::exists($path))
                {

                    File::delete($path);
                }
            }
            foreach($request->file('image_gallery') as $image_single)
            {
                $name = time().$image_single->getClientOriginalName();
                $image_single->move(public_path('uploads'),$name);
                $data_updated[] = $name;
            }

            $final = json_encode($data_updated);
            PropertyGallery::wherePropertyId($property->id)->update(['image_gallery'=> json_encode($final)]);

        }
        PropertyFeatureDetail::wherePropertyId($property->id)->delete();
        $property->feature_details()->sync($request->feature_detail_ids);
        return response('Product Updated Successfully With Gallery',201);
    }

    public function delete(Property $property)
    {
        if($property)
        {
            PropertyGallery::wherePropertyId($property->id)->delete();
            PropertyFeatureDetail::wherePropertyId($property->id)->delete();
            $property->delete();
            return response('Property Deleted Successfully',200);
        }
        else
        {
            return response('Could Not Delete Property',400);
        }

    }


    public function showFeatures($id)
    {
        $property = Property::findOrFail($id);
        $property->load('feature_details');
        $feature_ids = [];

        foreach($property->feature_details as $fd)
        {
            $feature_ids[]=$fd->id;
        }

        $details = FeatureDetail::with('feature')->whereIn('id',$feature_ids)->get();
        $response = [];
        foreach($details as $key => $x)
        {
            $response[$key]['title'] = $x->feature->title;
            $response[$key]['name'] = $x->name;
        }
        $collection = collect($response);
        $grouped = $collection->mapToGroups(function ($item, $key) {
            return [$item['title'] => $item['name']];
        });
        $grouped->all();
        return response($grouped,200);
    }
    public function featured(Property $property,Request $req)
    {
        $property->update(['feature_id'=>$req->status]);
        return response('success',200);
    }
    public function status(Property $property,Request $req)
    {
        $property->update(['status'=>$req->status]);
        return response('success',200);
    }
    public function enquiry(Property $property,Request $req)
    {
        $req->validate([
            'name'=> 'required',
            'phone_no'=> 'required',
        ]);
        Enquiry::create([
            'name' => $req->name,
            'email' => $req->email ?? null,
            'phone_no' => $req->phone_no,
            'agent_id' => $property->agent_id,
            'property_id' => $property->id,
            'message' => $req->message ?? null,
        ]);
        return response('success',200);
    }
    public function dataTableEnquiry($id,$user_type)
    {
        if($user_type == 0)
        {
            return DataTables::eloquent(Enquiry::with('property'))->make(true);
        }
        else
        {
            return DataTables::eloquent(Enquiry::with('property')->whereAgentId($id))->make(true);
        }

    }
}
