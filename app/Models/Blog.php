<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected static $blog;
    protected static $image;
    protected static $imageName;
    protected static $imageDirectory;
    protected static $imageUrl;

    public static function saveData($request)
    {
        self::$image            = $request->file('blog_image');
        self::$imageName        = time().rand(10,1000).'.'.self::$image->getClientOriginalExtension();
        self::$imageDirectory   = 'assets/images/blog/';
        self::$image->move(self::$imageDirectory,self::$imageName);
        self::$imageUrl         = self::$imageDirectory.self::$imageName;

        self::$blog = new Blog();
        self::$blog->category_id    = $request->category_id;
        self::$blog->blog_title     = $request->blog_title;
        self::$blog->blog_image     = self::$imageUrl;
        self::$blog->blog_description   = $request->blog_description;
        self::$blog->status         = $request->status;
        self::$blog->save();
    }

    public static function updateData ($request, $id)
    {
        self::$blog = Blog::find($id);
        self::$image    = $request->file('blog_image');

        if (self::$image)
        {
            if (file_exists(self::$blog->blog_image))
            {
                unlink(self::$blog->blog_image);
            }
            self::$imageName        = time().rand(10,1000).'.'.self::$image->getClientOriginalExtension();
            self::$imageDirectory   = 'assets/images/blog/';
            self::$image->move(self::$imageDirectory,self::$imageName);
            self::$imageUrl         = self::$imageDirectory.self::$imageName;
        }
        else
        {
            self::$imageUrl = self::$blog->blog_image;
        }

        self::$blog->category_id    = $request->category_id;
        self::$blog->blog_title     = $request->blog_title;
        self::$blog->blog_image     = self::$imageUrl;
        self::$blog->blog_description   = $request->blog_description;
        self::$blog->status         = $request->status;
        self::$blog->save();
    }

    public function category ()
    {
        return $this->belongsTo(Category::class);
    }

}
