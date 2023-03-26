<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\ShipCountry;
use App\Models\ShipCity;


class ShippingAreaController extends Controller
{
    public function AllCountry(){
        $country = ShipCountry::latest()->get();
        return view('backend.ship.country.country_all',compact('country'));
    } // End Method 


    public function AddCountry(){
        return view('backend.ship.country.country_add');
    }// End Method 

    public function StoreCountry(Request $request){ 

        ShipCountry::insert([ 
            'country_name' => $request->country_name, 
        ]);

       $notification = array(
            'message' => 'Country Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.country')->with($notification); 

    }// End Method 

    public function EditCountry($id){

        $country = ShipCountry::findOrFail($id);
        return view('backend.ship.country.country_edit',compact('country'));

    }// End Method 


     public function UpdateCountry(Request $request){

        $country_id = $request->id;

         ShipCountry::findOrFail($country_id)->update([
            'country_name' => $request->country_name,
        ]);

       $notification = array(
            'message' => 'Country Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.country')->with($notification); 


    }// End Method 


    public function DeleteCountry($id){

        ShipCountry::findOrFail($id)->delete();

         $notification = array(
            'message' => 'Country Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification); 


    }// End Method 

}
