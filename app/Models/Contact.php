<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected static $contact;

    public static function saveData($request)
    {
        self::$contact = new Contact();
        self::$contact->description = $request->description;
        self::$contact->email = $request->email;
        self::$contact->phone = $request->phone;
        self::$contact->address = $request->address;
        self::$contact->save();
    }
    public static function updateData($request, $id)
    {
        self::$contact = Contact::find($id);
        self::$contact->description = $request->description;
        self::$contact->email = $request->email;
        self::$contact->phone = $request->phone;
        self::$contact->address = $request->address;
        self::$contact->save();
    }

}
