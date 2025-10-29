<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $product;
   public function __construct()
    {
        $this->product = new Product();
    }

    public function index()
    {
        $products = $this->product->getAllProducts();
        return view('index', [
            'title' => 'Overzicht Magazijn Jamin',
            'products' => $products
        ]);

    }

    public function allergenenInfo($productId)
    {
        $allergenenInfo = $this->product->getAllergenenInfo($productId);

        return view('product.allergeenInfo', [
            'title' => 'Allergeen Informatie',
            'allergenenInfo' => $allergenenInfo
        ]);
    }

     public function leveringsInfo($productId)
    {
        $leverantieInfo = $this->product->getLeverantieInfo($productId);

        $leverancierInfo = $this->product->getLeverancierInfo($productId);

        return view('product.leveringsInfo', [
            'title' => 'Leverings Informatie',
            'leverantieInfo' => $leverantieInfo,
            'leverancierInfo' => $leverancierInfo
        ]);
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
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
