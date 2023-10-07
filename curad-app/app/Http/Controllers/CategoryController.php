<?php

namespace App\Http\Controllers;

// use App\Models\category;
use Illuminate\Http\Request;
use App\Models\category;

class CategoryController extends Controller
{
    public function showcategory()
    {
return view('category');
    }
    public function addcatg(Request $req)
    {
        $category["category_Name"] = $req ->input('catg_name');
        category::create($category);
        return redirect()->route('category');
    }
}
