<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $category;

    public function addCategory()
    {
        return view('admin.category.add');
    }

    public function newCategory(Request $request)
    {
        Category::saveData($request);
        return redirect()->back()->with('message','category added successfully');
    }

    public function manageCategory()
    {
        return view('admin.category.manage',[
            'categories'=>Category::all(),
        ]);
    }

    public function editCategory ($id)
    {
        return view('admin.category.edit', [
            'category'  => Category::find($id),
        ]);
    }

    public function updateCategory (Request $request, $id)
    {
        Category::updateData($request, $id);
        return redirect('/manage-category')->with('message', 'Category updated successfully');
    }

    public function deleteCategory ($id)
    {
        $this->category = Category::find($id);
        if (file_exists($this->category->category_image))
        {
            unlink($this->category->category_image);
        }
        $this->category->delete();
        return redirect()->back()->with('message', 'Category deleted successfully');;
    }
}
