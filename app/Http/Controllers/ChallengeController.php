<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ChallengeController extends Controller
{
    // 入力->確認->登録
    public function index(Request $request)
    {
        return view('index');
    }

    public function confirm(Request $request)
    {
        // $this->validate($request, Contact::$rules);

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

        // dd($items);
        return view('confirm', $items);
    }

    public function add(Request $request)
    {
        $data = $request->all();
        Contact::create($data);
        return view('thanks');
    }


    // システム管理
    public function system()
    {
        return view('system');
    }

    public function find(Request $request)
    {
        $form = Contact::where([
            'fullname', 'LIKE', "%{$request->fullname}%",
            'gender', 'LIKE', "%{$request->gender}%",
            'created_at', 'LIKE', "%{$request->created_at}%",
            'email', 'LIKE', "%{$request->email}%",
        ]);

        $items = [
            'form' => $form,
        ];

        return view('system', $items);
    }

    public function delete(Request $request)
    {
        Contact::find($request->id)->delete();
        return redirect('/');
    }
}