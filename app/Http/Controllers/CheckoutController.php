<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function product_details($id)
    {
        // dd($id);
        // Retrieve the product details based on the provided ID
        // $product = Product::find($id);

        // Check if the product exists
        // if (!$product) {
        //     // If the product doesn't exist, you can redirect the user or return an error message
        //     return redirect()->back()->with('error', 'Product not found.');
        // }

        // Pass the product details to the product_view blade
        // return view('product_view', compact('product'));
        return view('checkout.product_view');
    }

    public function add_cart(Request $request, $id)
{
    // Add logic to add the product to the cart based on the $id
    // For example:
    // $productId = $id;
    // Add to cart logic here...

    // Redirect to the 'my_cart' view after adding the product to the cart
    return view('checkout.my_cart');
}

public function checkout(Request $request) {
    // Retrieve cart data from form submission
    // dd($request);
    $cart = $request->input('cart');
    // Process checkout logic
    // Example: Save order to database, calculate total, etc.
    return view('checkout.payment')->with('cart', $cart);

}

}
