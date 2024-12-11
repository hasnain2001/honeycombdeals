<?php

namespace App\Http\Controllers;
use Spatie\ImageOptimizer\OptimizerChainFactory;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Imagick\Driver;
use App\Models\Categories;
use App\Models\Networks;
use Illuminate\Http\Request;
use App\Models\Stores;
use Illuminate\Support\Str;

class StoresController extends Controller
{


   
    public function store() {
        $stores = Stores::select('id', 'name', 'store_image', 'category', 'status', 'network','created_at','updated_at')
                        ->orderBy('created_at', 'desc')
                        ->get();
                        
        return view('admin.stores.index', compact('stores'));
    }
    
    public function create_store() {
        $categories = Categories::all();
        $networks = Networks::all();
        return view('admin.stores.create', compact('categories', 'networks'));
    }



    public function store_store(Request $request) {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:stores,slug',
            'description' => 'nullable|string',
            'url' => 'nullable|url',
            'destination_url' => 'nullable|url',
            'category' => 'nullable|string',
            'title' => 'nullable|string',
            'meta_tag' => 'nullable|string',
            'meta_keyword' => 'nullable|string',
            'meta_description' => 'nullable|string',
            'authentication' => 'nullable|string',
            'network' => 'nullable|string',
            'store_image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            'content' => 'nullable', 
        ]);

        // Handle the file upload if a store image is provided
        $storeImage = null;
        if ($request->hasFile('store_image')) {
            $file = $request->file('store_image');
            $storeImage = md5($file->getClientOriginalName()) . '.' . $file->getClientOriginalExtension();
            $filePath = public_path('uploads/store/') . $storeImage;

            // Save the file to the specified location
            $file->move(public_path('uploads/store/'), $storeImage);

            // Ensure that the file has been saved before trying to read it
            if (file_exists($filePath)) {
                // Use Imagick to create a new image instance
                // $image = ImageManager::imagick()->read($filePath);

                // // Resize the image to 300x200 pixels
                // $image->resize(300, 200);

                // // Optionally, resize only the height to 200 pixels
                // $image->resize(null, 200, function ($constraint) {
                //     $constraint->aspectRatio();
                // });

                // Optimize the image
                $optimizer = OptimizerChainFactory::create();
                $optimizer->optimize($filePath);

                // Save the resized and optimized image
                // $image->save($filePath);
            }
            else{
                return redirect()->back()->with('not found');
            }
        }

        // Create a new store record
        Stores::create([
            'name' => $request->input('name'),
            'slug' => $request->input('slug'),
            'description' => $request->input('description'),
            'url' => $request->input('url'),
            'destination_url' => $request->input('destination_url'),
            'category' => $request->input('category'),
            'title' => $request->input('title'),
            'meta_tag' => $request->input('meta_tag'),
            'meta_keyword' => $request->input('meta_keyword'),
            'meta_description' => $request->input('meta_description'),
            'status' => $request->input('status'),
            'authentication' => $request->input('authentication', 'No Auth'),
            'network' => $request->input('network'),
            'store_image' => $storeImage ?? 'No Store Image',
            'content' => $request->input('content'), // Add this line
        ]);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Store Created Successfully');
    }


    public function edit_store($id) {
        $stores = Stores::find($id);
        $categories = Categories::all();
        $networks = Networks::all();
        return view('admin.stores.edit', compact('stores', 'categories', 'networks'));
    }

    public function update_store(Request $request, $id) {
        // Find the store by ID
        $store = Stores::find($id);

        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
                //   'slug' => 'required|string|max:255|unique:stores,slug',
            'description' => 'nullable|string',
            'url' => 'nullable|url',
            'destination_url' => 'nullable|url',
            'category' => 'nullable|string',
            'title' => 'nullable|string',
            'meta_tag' => 'nullable|string',
            'meta_keyword' => 'nullable|string',
            'meta_description' => 'nullable|string',
            // 'status' => 'required|in:active,inactive', // Example statuses
            'authentication' => 'nullable|string',
            'network' => 'nullable|string',
            'store_image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048', // Validates image file
            'content' => 'nullable|string', 
        ]);


        $storeImage = $store->store_image;
        if ($request->hasFile('store_image')) {
            $file = $request->file('store_image');
            $storeImage = md5($file->getClientOriginalName()) . '.' . $file->getClientOriginalExtension();
            $filePath = public_path('uploads/store/') . $storeImage;

            // Save the file to the specified location
            $file->move(public_path('uploads/store/'), $storeImage);

            // Ensure that the file has been saved before trying to read it
            if (file_exists($filePath)) {
                // Use Imagick to create a new image instance
                $image = ImageManager::imagick()->read($filePath);

                // Resize the image to 300x200 pixels
                $image->resize(300, 200);

                // Optionally, resize only the height to 200 pixels
                $image->resize(null, 200, function ($constraint) {
                    $constraint->aspectRatio();
                });

                // Optimize the image
                $optimizer = OptimizerChainFactory::create();
                $optimizer->optimize($filePath);

                // Save the resized and optimized image
                $image->save($filePath);
            }
        }
      
        // Update the store record
        $store->update([
            'name' => $request->input('name'),
            'slug' => $request->input('slug'),
            'description' => $request->input('description'),
            'url' => $request->input('url'),
            'destination_url' => $request->input('destination_url'),
            'category' => $request->input('category', $store->category),
            'title' => $request->input('title'),
            'meta_tag' => $request->input('meta_tag'),
            'meta_keyword' => $request->input('meta_keyword'),
            'meta_description' => $request->input('meta_description'),
            'status' => $request->input('status'),
            'authentication' => $request->input('authentication', 'No Auth'),
            'network' => $request->input('network', $store->network),
            'store_image' => $storeImage, // Updated or existing image
            'content' => $request->input('content'), // Add this line
        ]);

        // Redirect back with a success message
        return redirect()->route('admin.store')->with('success', 'Store Updated Successfully');
    }
    public function delete_store($id) {
        Stores::find($id)->delete();
        return redirect()->back()->with('success', 'Store Deleted Successfully');
    }
public function deleteSelected(Request $request)
    {
        $storeIds = $request->input('selected_stores');

        if ($storeIds) {
            // Delete only the stores
            Stores::whereIn('id', $storeIds)->delete();

            return redirect()->back()->with('success', 'Selected stores deleted successfully');
        } else {
            return redirect()->back()->with('error', 'No stores selected for deletion');
        }
    }


}
