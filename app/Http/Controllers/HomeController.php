<?php

namespace App\Http\Controllers;
use App\Models\Blogs;
use App\Models\Category;
use App\Models\Products;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $blogs=Blogs::where('status',1)
                    ->get();
        $category=Category::where('status',1)
        ->pluck('name','id');
        $products=Products::where('status',1)
        ->get();
        $data=[];
        foreach($products as $key=>$value)
        {
            $data[$value->category_id][]=$value;
        }

        // dd($category,$products,$data);
        return view('home',
        ['blogs'=>$blogs,
        'category'=>$category,
        'products'=>$products,
        'data'=>$data
    
    ]);
    }

    public function show($id)
    {
        $blog = Blogs::findOrFail($id);
        return view('blog', compact('blog'));
    }
}

