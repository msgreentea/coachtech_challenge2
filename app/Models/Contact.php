<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public static $rules = array(
        'fullname' => 'required',
        'gender' => 'required',
        'email' => 'required | email:rfc, dns',
        'postcode' => 'required | min:8',
        'address' => 'required',
        'opinion' => 'required | max:120'
    );

    // static $gender = [
    //     '男性', '女性'
    // ];
}