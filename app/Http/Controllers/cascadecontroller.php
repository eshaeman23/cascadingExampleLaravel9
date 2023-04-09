<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class cascadecontroller extends Controller
{
    public function indexfunc()
    {
        $country = DB::table("country")->get();
        return View("index",compact("country"));
    }
    public function cascadefunc(Request $r)
    {
     $countryid=$r->post("country_id");
    // echo $countryid;   
    $cities = DB::table("city")->where("countryid",$countryid)->get();
    echo '<option>Select city</option>';
    foreach($cities as $city)
    {
        echo '<option>'.$city->cityname.'</option>';
    }
    }
}
