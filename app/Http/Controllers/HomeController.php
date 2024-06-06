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
    $store = Stores::latest()->paginate(24);
    $categories = Categories::latest()->paginate(6);
       $blogs = Blog::all();
      $topCoupons = Coupons::latest()->paginate(20);
    return view('home', compact('store', 'categories', 'blogs','topCoupons'));
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
    
        // Fetch related stores
        $relatedStores = Stores::where('category', $store->category)
                               ->where('id', '!=', $store->id)
                               ->take(5) // Limit the number of related stores
                               ->get();
    
        return view('store_details', compact('store', 'coupons', 'relatedStores'));
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
    $category = Categories::all();
    
    // Pass the stores, category name, and categories to the view
    return view('related_category', compact('stores', 'name', 'category'));
}



    public function storesByCategory($title)
    {
        // Assuming you're fetching the category based on the meta_tag
        $category = Categories::where('title', $title)->first();

        if (!$category) {
            abort(404); // Or handle the case when category is not found
        }

        $stores = $category->stores()->get();

        // Assuming you want to pass the category name to the view
        $name = $category->name;

        return view('related_category', compact('stores', 'name'));
    }
}
