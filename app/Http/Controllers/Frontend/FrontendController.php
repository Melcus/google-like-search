<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Store;

/**
 * Class FrontendController.
 */
class FrontendController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('frontend.index');
    }

    /**
     * @return \Illuminate\View\View
     */
    public function macros()
    {
        return view('frontend.macros');
    }

    public function search()
    {
         return view('frontend.search');
    }


    public function stores()
    {

        $stores = Store::search()->paginate(15);
        return view('frontend.stores', compact('stores'));
    }

    public function single_store(Store $store)
    {

      return view('frontend.single_store', compact('store'));

    }

    public function execute_search(Request $request)
    {

        $stores = Store::search()->querystring('*' . $request->search_query . '*' , ['fields' => ['name^4' , 
                                                                                                  'description', 
                                                                                                  'street_address', 
                                                                                                  'house_number', 
                                                                                                  'zipcode', 
                                                                                                  'website',
                                                                                                  'city.name^2',
                                                                                                  'state.name^2',
                                                                                                  'country.name^3',
                                                                                                  'country.sortname^6'
                                                                                                  ]])->size(15)->get()->hits();

        
        return response()->json(['stores' => $stores]);

    }
}
