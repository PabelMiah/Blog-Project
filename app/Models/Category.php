<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarded;

    protected static $category;
    protected static $image;
    protected static $imageName;
    protected static $imageDirectory;
    protected static $imageUrl;

    public static function saveData($request)
    {
        self::$image            = $request->file('category_image');
        self::$imageName        = time().rand(10,1000).'.'.self::$image->getClientOriginalExtension();
        self::$imageDirectory   = 'assets/images/category/';
        self::$image->move(self::$imageDirectory,self::$imageName);
        self::$imageUrl         = self::$imageDirectory.self::$imageName;

        self::$category = new Category();
        self::$category->category_name  = $request->category_name;
        self::$category->category_image = self::$imageUrl;
        self::$category->status         = $request->status;
        self::$category->save();

    }

    public static function updateData($request, $id)
    {
        self::$category = Category::find($id);
        self::$image    = $request->file('category_image');

        if (self::$image)
        {
            if (file_exists(self::$category->category_image))
            {
                unlink(self::$category->category_image);
            }
            self::$imageName        = time().rand(10,1000).'.'.self::$image->getClientOriginalExtension();
            self::$imageDirectory   = 'assets/images/category/';
            self::$image->move(self::$imageDirectory,self::$imageName);
            self::$imageUrl         = self::$imageDirectory.self::$imageName;
        }
        else
        {
            self::$imageUrl = self::$category->category_image;
        }

        self::$category->category_name  = $request->category_name;
        self::$category->category_image = self::$imageUrl;
        self::$category->status         = $request->status;
        self::$category->save();

    }
}
