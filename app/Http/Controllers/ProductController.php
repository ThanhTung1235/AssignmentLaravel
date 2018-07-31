<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::all();
        $categoryId = Input::get('categoryId');
        if ($categoryId == null) {
            $product = Product::all();
            return view('admin.product.list')
                ->with('category', $category)
                ->with('categoryId', $categoryId)
                ->with('obj', $product);
        } else {
            $product = Product::where('categoryId', Input::get('categoryId'));
            return view('admin.product.list')
                ->with('category', $category)
                ->with('categoryId', $categoryId)
                ->with('obj', $product);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        return view('admin.product.create')->with('category', $category);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $obj = new Product();
        $obj->name = Input::get('name');
        $obj->description = Input::get('description');
        $obj->categoryId = Input::get('categoryId');
        $obj->image = Input::get('image');
        $obj->price = Input::get('price');
        $obj->save();
        return redirect('/admin/product');


    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::all();
        $obj = Product::find($id);
        if ($obj == null) {
            return 'not found!!!';
        }
        return view('admin.product.edit')->with('obj', $obj)
            ->with('category', $category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $obj = Product::find($id);
        if ($obj == null) {
            return 'not found!!!';
        }
        $obj->name = Input::get('name');
        $obj->description = Input::get('description');
        $obj->categoryId = Input::get('categoryId');
        $obj->image = Input::get('image');
        $obj->price = Input::get('price');
        $obj->save();
        return redirect('/admin/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obj = Product::find($id);
        if ($obj == null) {
            return 'Not Found!!!';
        }
        $obj->delete();
        return 'Deleted';
    }
}
