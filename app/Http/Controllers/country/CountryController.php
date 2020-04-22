<?php

namespace App\Http\Controllers\country;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\CountryModel;
use Validator;

class CountryController extends Controller
{
    public function country()
    {
        return \response()->json(CountryModel::get(),200);
    }

    public function countryById($id)
    {
        $country= CountryModel::find($id);
        if(is_null($country))
        {
            return \response()->json(["message"=>"Record not found!"],404);
        }
        return \response()->json($country,200);
    }

    public function countrySave(Request $request)
    {
        $validation=[
            'name'=>'required|min:3',
            'iso'=>'required|min:2|max:2',
        ];
        $validator = Validator::make($request->all(), $validation);
        if($validator->fails()){
            return \response()->json($validator->errors(),400);
        }
        $country = CountryModel::create($request->all());
        return \response()->json($country,201);
    }

    public function countryUpdate(Request $request, $id)
    {
        $country= CountryModel::find($id);
        if(is_null($country))
        {
            return \response()->json(["message"=>"Record not found!"],404);
        }
        $countryid->update($request->all());
        return \response()->json($countryid,200);
    }

    public function countryDelete(Request $request, $id)
    {
        $country= CountryModel::find($id);
        if(is_null($country))
        {
            return \response()->json(["message"=>"Record not found!"],404);
        }
        $countryid->delete();
        return \response()->json(null,204);
    }
}
