<?php

namespace App\Http\Controllers;

use App\Citizen;
use Illuminate\Http\Request;

class CitizenController extends Controller
{
    public function create(Request $request)
    {
        $citizens = new Citizen();
        // $citizens = Citizen::create($request->all());

        $citizens->fname = $request->input('fname');
        $citizens->lname = $request->input('lname');
        $citizens->dob = $request->input('dob');
        $citizens->telephone = $request->input('telephone');
        $citizens->email = $request->input('email');
        $citizens->address = $request->input('address');
        $citizens->lng = $request->input('lng');
        $citizens->lat = $request->input('lat');
        $citizens->health_status = $request->input('health_status');

        $citizens->save();
        return response()->json($citizens, 201);
    }

    public function getData()
    {
        return response()->json(Citizen::get(), 200);
    }

    public function getDataByID($id)
    {
        return response()->json(Citizen::find($id), 200);
    }

    public function updateCitizen(Request $request, $id)
    {
        $citizens = Citizen::find($id);

        $citizens->fname = $request->input('fname');
        $citizens->lname = $request->input('lname');
        $citizens->dob = $request->input('dob');
        $citizens->telephone = $request->input('telephone');
        $citizens->email = $request->input('email');
        $citizens->address = $request->input('address');
        $citizens->lng = $request->input('lng');
        $citizens->lat = $request->input('lat');
        $citizens->health_status = $request->input('health_status');

        $citizens->save();
        return response()->json($citizens, 200);

        // $citizens->update($request->all());
        // return response()->json($citizens);
    }

    public function deleteCitizen(Request $request, $id)
    {
        $citizens = Citizen::find($id);
        $citizens->delete();

        return response()->json($citizens);
    }
}

