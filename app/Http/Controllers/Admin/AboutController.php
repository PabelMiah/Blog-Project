<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    protected $about;
    public function addAbout ()
    {
        return view('admin.about.add', [
        ]);
    }
    public function newAbout (Request $request)
    {
        About::saveData($request);
        return redirect()->back()->with('message', 'About created successfully');
    }

    public function manageAbout ()
    {
        return view('admin.about.manage',[
            'abouts'     => About::all(),
        ]);
    }

    public function editAbout ($id)
    {
        return view('admin.about.edit', [
            'about'  => About::find($id),
        ]);
    }

    public function updateAbout (Request $request, $id)
    {
        About::updateData($request, $id);
        return redirect('/manage-about')->with('message', 'Updated Successfully');
    }

    public function deleteAbout ($id)
    {
        $this->about = About::find($id);
        if (file_exists($this->about->about_image))
        {
            unlink($this->about->about_image);
        }
        $this->about->delete();
        return redirect()->back()->with('message', 'Deleted Successfully');;
    }
}
