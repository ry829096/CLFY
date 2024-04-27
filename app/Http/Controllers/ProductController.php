<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Category;
use Illuminate\Http\Request;
use Auth;
use DB;
class ProductController extends Controller
{
    public function index()
    {
        $products = Products::all();
        // dd($products);
        return view('Item.index', compact('products'));
    }

    public function create()
    {
        $category=Category::where('status',1)
        ->pluck('name','id');
        return view('Item.create',[
            'category'=>$category
        ]);
    }
    public function store(Request $request)
    {
    $images = $request->file('productImage'); // Use file() method instead of productImage directly

    $productData = [
        'name' => $request->productName,
        'quantity' => $request->quantity,
        'thumbnail_img' => 'uploads/' . $images[0]->getClientOriginalName(), // Prepend "uploads/" to the image name
        'label' => $request->productLabels, 
        'tag' => $request->productTags,
        'category_id' => $request->productCategory, 
        'description' => $request->description,
        'created_at' => now(), // Use now() to get current date and time
        'max_price' => $request->actual_productPrice,
        'discounted_price' => $request->discount_productPrice, 
        'status' => !empty($request->rememberMe) ? 1 : 2,
    ];

    // Create product
    $product = Products::create($productData);
    $productId = $product->id;

    // Move uploaded images to public uploads folder
    $imageData = [];
    foreach ($images as $image) {
        $imageName = 'uploads/' . $image->getClientOriginalName(); // Prepend "uploads/" to the image name
        $image->move(public_path('uploads'), $imageName); // Move image to public uploads folder

        // Create record in the database for each uploaded image
        $imageData[] = [
            'product_id' => $productId,
            'image' => $imageName,
            'created_by' => Auth::user()->id,
        ];
    }

    // Insert images into database
    DB::table('product_images')->insert($imageData);

        return redirect()->route('Item.index')->with('success', 'Product created successfully.');
    }

    public function show($id)
    {
        $product = Products::findOrFail($id);
        return view('Item.show', compact('product'));
    }

    public function edit($id)
    {
        $product = Products::findOrFail($id);
        return view('Item.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'productName' => 'required|string|max:255',
            'productLabels' => 'nullable|string|max:255',
            // Add validation for other fields
        ]);

        $product = Products::findOrFail($id);
        $product->update($request->all());

        return redirect()->route('Item.index')->with('success', 'Product updated successfully.');
    }

    public function destroy($id)
    {
        $product = Products::findOrFail($id);
        $product->delete();

        return redirect()->route('Item.index')->with('success', 'Product deleted successfully.');
    }
}
