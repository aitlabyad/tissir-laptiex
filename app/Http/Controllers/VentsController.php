<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Vent;
use DB;


class VentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::orderBy('stock','desc')->where('stock', '>', 0)->get();
        return view('pages.vents')->with('product', $product);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $users = DB::table('product')->whereIn('id', $_POST['selected'])->get();
        return view('pages.panier')->with('product', $users);
     
     
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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
     * Show the form for editing the specified resource.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function sell(Request $request)
    {

        $total =0;
        $profit = 0;

        $i=0;
        $ldate = date('Y-m-d');
        foreach($_POST['price'] as $item){
            $total +=$item*$_POST['Quantite'][$i];
            $profit += ($item- $_POST['priceA'][$i]) * $_POST['Quantite'][$i] ;

            $i++;
        }

        $vent = new Vent;
        $vent->client = 'default';
        $vent->total = $total;
        $vent->profit = $profit;
        $vent->updated_at =  $ldate;
        $vent->created_at =  $ldate;
        $vent->save();






        $i=0;
       
        if(isset($_POST['sel']) ){
           foreach($_POST['sel'] as $item){
            $product = Product::find($item);
            $product->stock = $product->stock-$_POST['Quantite'][$i];
            $product->save();
            $i++;
           } 
        }
        // return '<p>'.$profit.'</p>';
        return redirect('/Products')->with('success', 'transaction réussiee');
    
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
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
}
