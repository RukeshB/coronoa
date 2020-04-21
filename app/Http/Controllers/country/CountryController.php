<?php

namespace App\Http\Controllers\country;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\CountryModel;

class CountryController extends Controller
{
    public function country()
    {
        return \response()->json(CountryModel::get(),200);
    }

    public function countryById($id)
    {
        return \response()->json(CountryModel::find($id),200);
    }
}
