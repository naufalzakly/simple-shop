<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index (Request $request){
        $categories = Category::all();
        return view('category.index',compact('categories'));
    }
    public function create()
    {
        return view('category.create');
    }
    public function detail(Request $request, $id)
    {
        $categories = Category::find($id);
        return view('category.detail',compact('categories'));
    }
    public function store(Request $request)
    {
        $data = $request->all();

        $categories = Category::create([
            'name' => $data['name'],
            
        ]);

        return redirect()->route('category.index');
    }
}
