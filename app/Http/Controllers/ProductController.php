<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Image;

class ProductController extends Controller
{
    public function addProduct() {
        $categories = Category::where('publication_status', 1)->get();
        $brands = Brand::where('publication_status', 1)->get();
        return view('admin.product.add-product', [
            'categories'=>$categories,
            'brands'=>$brands
        ]);
    }
    public function saveProductInfo(Request $request) {

        $hallImage = $request->file('hall_image');
        $imageName = $hallImage->getClientOriginalName();
        $directory = 'images/movie-hall';
        $imgUrl = $directory.$imageName;
        Image::make($hallImage)->resize(600, 600)->save($imgUrl);


         $product = new Product();
         $product->category_id = $request->category_id;
         $product->category_id = $request->category_id;
         $product->brand_id = $request->brand_id;
         $product->product_name = $request->product_name;
         $product->product_code = $request->product_code;
         $product->product_price = $request->product_price;
         $product->product_quantity = $request->product_quantity;
         $product->short_description = $request->short_description;
         $product->long_description = $request->long_description;
         $product->product_image = $imgUrl;
         $product->publication_status = $request->publication_status;
         $product->save();

         return redirect('/add-product')->with('message', 'Product info save successfully');
    }

}



