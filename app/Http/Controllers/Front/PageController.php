<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Contact;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('front.home.home',[
            'categories'  => Category::where('status', 1)->latest()->get(),
            'blogFeature' => Blog::where('status', 1)->get(),
            'blogRecent'  => Blog::where('status', 1)->take(3)->latest()->get(),
        ]);
    }

    public function blogPost($id)
    {
        return view('front.blog.post',[
//            'categories'  => Category::where('status', 1)->latest()->get(),
            'blogFeature' => Blog::where('status', 1)->get(),
            'blogRecent'  => Blog::where('status', 1)->take(3)->latest()->get(),
            'blog' =>Blog::find($id),

        ]);
    }

    public function contact()
    {
        return view('front.contact.contact',[
            'blogRecent'  => Blog::where('status', 1)->take(3)->latest()->get(),
            'contacts'    => Contact::all(),


        ]);
    }

    public function about()
    {
        return view('front.about.about',[
            'blogRecent'    => Blog::where('status', 1)->take(3)->latest()->get(),
            'abouts'         =>About::all(),
        ]);
    }

}
