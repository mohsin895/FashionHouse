<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Product;
use App\Models\ProductImage;
use Image;

class ProductsController extends Controller
{


    public function create()
    {
      return view('admin.pages.product.create');
    }

    public function edit($id){
     $product = Product::find($id);
      return view('admin.pages.product.edit')->with('product', $product);
    }

    public function index(){
     $products = Product::orderBy('id','desc')->get();
      return view('admin.pages.product.index')->with('products', $products);
    }

    public function store(Request $request)
    {



      $validatedData = $request->validate([
             'title' => 'required|max:255',
             'description' => 'required',
             'quantity' => 'required|numeric',
             'price' => 'required|numeric',
             'category_id' => 'required|numeric',
             'brand_id' => 'required|numeric',
         ]);

      $product = new Product;
      $product->title = $request->title;
        $product->description = $request->description;
        $product->quantity = $request->quantity;
        $product->price = $request->price;

          $product->slug = str::slug($request->title);
          $product->category_id = $request->category_id;
          $product->brand_id = $request->brand_id;
          $product->admin_id = 1;

          $product->save();

          //ProductImage model insert

          // if ($request->hasFile('product_image')) {
          //
          //
          //
          //
          //   //inser that images
          //
          //   $image=$request->file('product_image');
          //   $img =time().'.'. $image->getClientOriginalExtension();
          //   $location = public_path('images/products/' .$img);
          //   Image::make($image)->save($location);
          //
          //   $product_image = new ProductImage;
          //   $product_image->product_id = $product->id;
          //   $product_image->image = $img;
          //   $product_image->save();

          if (count($request->product_image)>0) {
          foreach ($request->product_image as $image) {


             //inser that images

          //   $image=$request->file('product_image');
             $img =time().'.'. $image->getClientOriginalExtension();
             $location = public_path('images/products/' .$img);
             Image::make($image)->save($location);

             $product_image = new ProductImage;
             $product_image->product_id = $product->id;
             $product_image->image = $img;
             $product_image->save();

          }
          }
      session()->flash('success', 'A new product has addad successfully');
      return redirect()->route('admin.products');
    }

    public function update(Request $request,$id)
    {



      $validatedData = $request->validate([
             'title' => 'required|max:255',
             'description' => 'required',
             'quantity' => 'required|numeric',
             'price' => 'required|numeric',
             'category_id' => 'required|numeric',
             'brand_id' => 'required|numeric',
         ]);

      $product =  Product::find($id);
      $product->title = $request->title;
        $product->description = $request->description;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;

          $product->save();

      return redirect()->route('admin.products');
    }
    public function delete($id)
    {
      $product = Product::find($id);
      if(!is_null($product)){
        $product->delete();
      }
        session()->flash('success', 'A  product has delete successfully');
      return back();
    }
}
