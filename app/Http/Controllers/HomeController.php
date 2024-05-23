<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use App\Models\Categories;
use App\Models\Coupons;
use App\Models\Stores;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    
  
    public function index() {
    $store = Stores::latest()->paginate(25);
    $categories = Categories::latest()->paginate(6);
    $blogs = Blog::inRandomOrder()->limit(6)->get();
      $topCoupons = Coupons::latest()->paginate(20);
    return view('home', compact('store', 'categories', 'blogs','topCoupons'));
}



public function showcoupons($storeId)
{
 $store = Stores::find($storeId);
    $coupons = Coupons::where('store_id', $storeId)->paginate(10);

    return view('store_coupons', ['store' => $store, 'coupons' => $coupons]);
}




public function products($category_slug) {
    $categories = Categories::where('meta_tag', $category_slug)->first();
    if ($categories) {
        $products = $categories->products()->get();
        return view ('related_category_stores', compact('categories', 'products'));
    } else {
        return redirect()->back();
    }
}
public function showDiscountCodes($name)
{
    // Assuming you have a model called Store
    $stores = Stores::where('name', $name)->get();

    // Check if any stores were found
    if ($stores->count() > 0) {
        return view('related_category_stores', ['name' => $name, 'stores' => $stores]);
    } else {
        return view('related_category_stores', ['name' => $name, 'stores' => null]);
    }
}


   public function stores()
{
    $stores = Stores::paginate(24); // Paginate with 4 stores per page
    return view('stores', compact('stores'));
}

   public function blog() {
    $blogs = Blog::all();
    return view('Blog', compact('blogs'));
}

    
    
    public function blog_Details($name) {
        // Convert the name to slug
        $slug = Str::slug($name);
        
        // Find the blog post by slug
        $blog = Blog::where('slug', $slug)->firstOrFail();
        
        // Pass the blog data to the view
        return view('blog_details', compact('blog'));
    }
    public function StoreDetails($name) {
        $slug = Str::slug($name);
        $title = ucwords(str_replace('-', ' ', $slug));
        $coupons = Coupons::where('store', $title)->orderByRaw('CAST(`order` AS SIGNED) ASC')->get();
        $store = Stores::where('name', $title)->first();
        return view('store_details', compact('store', 'coupons'));
    }
    
  
      public function categories() {
        $category = Categories::all();
        return view('categories', compact('category'));
    }
     

public function RelatedCategoryStores($title)
{
    // Convert the meta tag to a slug
    $slug = Str::slug($title);
    
    // Convert the slug back to title case
    $name = ucwords(str_replace('-', ' ', $slug));
    
    // Retrieve stores related to the category
    $stores = Stores::where('category', $name)->get();
    
    // Retrieve all categories
    $categories = Categories::all();
    
    // Pass the stores, category name, and categories to the view
    return view('related_category', compact('stores', 'name', 'categories'));
}



    public function storesByCategory($meta_tag)
    {
        // Assuming you're fetching the category based on the meta_tag
        $category = Categories::where('title', $meta_tag)->first();

        if (!$category) {
            abort(404); // Or handle the case when category is not found
        }

        $stores = $category->stores()->get();

        // Assuming you want to pass the category name to the view
        $name = $category->name;

        return view('related_category', compact('stores', 'name'));
    }
}
