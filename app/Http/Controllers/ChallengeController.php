<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChallengeController extends Controller
{
    public function index(Request $request)
    {
        return view('index');
    }

    public function confirm(Request $request)
    {
        $fullname = $request->familyname . " " . $request->lastname;
        $gender = $request->gender;
        $email = $request->email;
        $postcode = $request->postcode;
        $address = $request->address;
        $building_name = $request->building_name;
        $opinion = $request->opinion;

        $items = [
            'fullname' => $fullname,
            'gender' => $gender,
            'email' => $email,
            'postcode' => $postcode,
            'address' => $address,
            'building_name' => $building_name,
            'opinion' => $opinion
        ];

        // $items = $request->all();
        // が良いけどfamilynameとlastnameをくっつけられない

        return view('confirm', $items);
    }

    public function add(Request $request)
    {
        $data = $request->all();
        Contact::create($data);
    }
    public function thanks()
    {
        return view('thanks');
    }
}