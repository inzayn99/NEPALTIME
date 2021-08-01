<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends BackendController
{
    public function index()
    {
        $this->data('categoryData', Category::orderBy('id', 'desc')->get());
        return view($this->pagePath . '.category.show-category', $this->data);
    }


    function slugGenerator($data)
    {
        return str_replace(' ', '-', trim($data));
    }


    public function add(Request $request)
    {

        if ($request->isMethod('get')) {
            return view($this->pagePath . '.category.add-category', $this->data);

        }
        if ($request->isMethod('post')) {
            $catObj = new Category();
            $catObj->cat_name = $request->cat_name;
            $catObj->slug = $this->slugGenerator($request->slug);
            $catObj->meta_keywords = $request->meta_keywords;
            $catObj->meta_description = $request->meta_description;
            $catObj->description = $request->description;
            $catObj->posted_by = Auth::guard('admin')->user()->id;

            if ($catObj->save()) {
                return redirect()->route('category')->with('success', 'Data was inserted');
            } else {
                return redirect()->back()->with('error', 'Data cannot inserted ');

            }

        }


    }

    public function updateStatus(Request $request)
    {
        if ($request->isMethod('get')) {
            return redirect()->back();
        }
        if ($request->isMethod('post')) {
            $id = $request->criteria;
            $findUser = Category::findOrFail($id);
            if (isset($_POST['active'])) {
                $findUser->status = 0;
                $message = "Status Updated to Inactive";
            }
            if (isset($_POST['inactive'])) {
                $findUser->status = 1;
                $message = "Status Updated to Active";
            }
            if ($findUser->update()) {
                return redirect()->back()->with('success', $message);
            }
        }
    }

    public function delete(Request $request){
        $id=$request->criteria;
        if (Category::findOrFail($id)->delete()) {
            return redirect()->route("category")->with('success', "Data Deleted Successfully");
        }
    }

}
