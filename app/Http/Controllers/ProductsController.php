<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::orderBy('created_at','desc')->get();
        $productE = array();
        return view('pages.datatables')->with('product', $product)->with('productE', $productE);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.creat');
    }
     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function look(Request $request)
    {
       
        // search for product or equivalents
        $look_for = $request->input('look_for');
        $product = Product::where('reference','LIKE','%'.$look_for.'%')
                ->get();

        $productE = Product::where('reference','LIKE','%'.$look_for.'%')
                ->get();

      


        return view('pages.datatables')->with('product', $product)->with('productE', $productE);

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        // Creat product
        $ldate = date('Y-m-d');
        $product = new Product;

        $product->reference =   $request->input('reference');
        $product->updated_at =  $ldate;
        $product->created_at =  $ldate;
        $product->prix_achat =  $request->input('prixa');
        $product->prix_vent =   $request->input('prixv');
        $product->stock =       $request->input('stock');
        $product->equivalent=   $request->input('equivalent');
        $product->marque =      $request->input('marque');
        $product->type =        $request->input('type');
        $product->save();

        return redirect('/Products')->with('success', 'Produit Ajoute');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function plusOne(Request $request, $id)
    {
        //
    }
}
