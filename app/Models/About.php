<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected static $about;
    protected static $image;
    protected static $imageName;
    protected static $imageDirectory;
    protected static $imageUrl;

    public static function saveData($request)
    {
        self::$image            = $request->file('about_image');
        self::$imageName        = time().rand(10,1000).'.'.self::$image->getClientOriginalExtension();
        self::$imageDirectory   = 'assets/images/about/';
        self::$image->move(self::$imageDirectory,self::$imageName);
        self::$imageUrl         = self::$imageDirectory.self::$imageName;

        self::$about = new About();
        self::$about->upper_description     = $request->upper_description;
        self::$about->about_image           = self::$imageUrl;
        self::$about->lower_description     = $request->lower_description;
        self::$about->mission_description   = $request->mission_description;
        self::$about->mission_1             = $request->mission_1;
        self::$about->mission_2             = $request->mission_2;
        self::$about->mission_3             = $request->mission_3;
        self::$about->save();
    }

    public static function updateData ($request, $id)
    {
        self::$about    = About::find($id);
        self::$image    = $request->file('about_image');

        if (self::$image)
        {
            if (file_exists(self::$about->about_image))
            {
                unlink(self::$about->about_image);
            }
            self::$imageName        = time().rand(10,1000).'.'.self::$image->getClientOriginalExtension();
            self::$imageDirectory   = 'assets/images/about/';
            self::$image->move(self::$imageDirectory,self::$imageName);
            self::$imageUrl         = self::$imageDirectory.self::$imageName;
        }
        else
        {
            self::$imageUrl = self::$about->about_image;
        }

        self::$about->upper_description     = $request->upper_description;
        self::$about->about_image           = self::$imageUrl;
        self::$about->lower_description     = $request->lower_description;
        self::$about->mission_description   = $request->mission_description;
        self::$about->mission_1             = $request->mission_1;
        self::$about->mission_2             = $request->mission_2;
        self::$about->mission_3             = $request->mission_3;
        self::$about->save();
    }

}
