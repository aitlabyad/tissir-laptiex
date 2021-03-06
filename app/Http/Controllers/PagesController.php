<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Vent;
use DB;

class PagesController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index()
    {
        $page_title = 'Dashboard';
        $page_description = 'Some description for the page';


        $total = DB::table('vents')->sum('total');
        $profit = DB::table('vents')->sum('profit');

        $count = Product::where('stock', '<', 1)->count();

        return view('pages.dashboard', compact('page_title', 'page_description',))->with('total',$total)->with('profit',$profit)->with('count',$count);
        // return view('pages.dashboard', compact('page_title', 'page_description',))->with('data', ['total' => $total,'profit' => $profit]);
    }

    /**
     * Demo methods below
     */

    // Datatables
    public function datatables()
    {
        $page_title = 'Datatables';
        $page_description = 'This is datatables test page';

        return view('pages.datatables', compact('page_title', 'page_description'));
    }

    // KTDatatables
    public function ktDatatables()
    {
        $page_title = 'KTDatatables';
        $page_description = 'This is KTdatatables test page';

        return view('pages.ktdatatables', compact('page_title', 'page_description'));
    }

    // Select2
    public function select2()
    {
        $page_title = 'Select 2';
        $page_description = 'This is Select2 test page';

        return view('pages.select2', compact('page_title', 'page_description'));
    }

    // Quicksearch Result
    public function quickSearch()
    {
        return view('layout.partials.extras._quick_search_result');
    }
}
