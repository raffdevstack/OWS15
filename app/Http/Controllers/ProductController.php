<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    

    public function store(Request $request)
    {
        // Validate the incoming request data before processing it
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'file' => 'required|file', // Add appropriate file validation rules
        ]);

        $product = new Product();

        // Handle file upload
        $file = $request->file('file');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move('assets', $filename);

        // Set data to the product instance
        $product->file = $filename;
        $product->name = $validatedData['name'];
        $product->description = $validatedData['description'];

        $product->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $data = products::all();
        return view('showproduct', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
