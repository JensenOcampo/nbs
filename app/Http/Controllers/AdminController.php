<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use BaconQrCode\Renderer\Path\Move;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function view_dashboard()
    {
        return view('admin.home');
    }

    public function view_category()
    {
        $data = Category::all();
        return view('admin.category', compact('data'));
    }

    public function add_category(Request $request)
    {
        $data = new category;
        $data->category_name = $request->category;
        $data->save();
        return redirect()->back()->with('message', 'Category added successfully!!!');
    }

    public function delete_category($id)
    {
        // $name = Category::all();
        $data = Category::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Category deleted successfully!!!');
    }

    public function view_product()
    {
        $category =  Category::all();

        return view('admin.product', compact('category'));
    }

    public function add_product(Request $request)
    {
        $product = new Product;
        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->discount_price = $request->dis_price;
        $product->quantity = $request->quantity;
        $product->category = $request->category;

        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('product', $imagename);
        $product->image = $imagename;
        $product->save();

        return redirect()->back()->with('message', 'Product added successfully!!!');
    }

    public function show_product()
    {
        $product = Product::all();
        return view('admin.show_product', compact('product'));
    }

    public function delete_product($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->back();
    }
}
