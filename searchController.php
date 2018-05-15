<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Excel;
use Illuminate\Http\Request;
use App\exceldata;
use DB;
use Session;

class searchController extends Controller
{
    public function search()
    {
        return view('filter');
        // when user click on this controller then this controller's duty is to populat all the data save into database
       // according to the user requirment,
    }
    public function customSearch()
    {
        $record = exceldata::orderBy('created_at','desc');
        return view('customsearch')->with('record', $record);
    }
    
    public function filter(Request $request)
    {   
        if($request->input('action') != "search")
        {
            session()->forget(['first_name','sur_name','email_work','position','country','event_name','event_date','nature_of_business','mobile_number']);

        }
        $first_name = $request->input('first_name');
        $sur_name = $request->input('sur_name');
        $email_work = $request->input('email_work');
        $country = $request->input('country');
        $position = $request->input('position');
        $event_id = $request->input('event_id');
        $event_name = $request->input('event_name');
        $nature_of_business = $request->input('nature_of_business');
        $mobile_number = $request->input('mobile_number');
        $event_date = $request->input('event_date');
        // set session variables 
        session(['mobile_number'=>$mobile_number,'event_data'=>$event_date,'country'=>$country,'position'=>$position,'event_name'=>$event_name,'nature_of_business'=>$nature_of_business,'first_name'=>$first_name,'sur_name'=>$sur_name,'email_work'=>$email_work]);
           
            $record = DB::table('exceldatas');
            $countrylist =DB::table('exceldatas')->distinct()->get(['country']);
            $positionlist = DB::table('exceldatas')->distinct()->get(['position']);
            $eventlist = DB::table('exceldatas')->distinct()->get(['event_name']);
            $nature_of_business_list = DB::table('exceldatas')->distinct()->get(['nature_of_business']);

            if ($request->has('first_name')){
                $record->where('first_name', $first_name);
            }
            if ($request->has('sur_name')) {
               $record->where('sur_name', $sur_name);
            }
            if ($request->has('email_work')) {
                $record->where('email_work', $email_work);
            }
            if ($request->has('country')) {
                $record->where('country', $country);
            }
            if ($request->has('event_name')) {
                $record->where('event_name', $event_name);
            }
            if ($request->has('nature_of_business')) {
                $record->where('nature_of_business', $nature_of_business);
            }
            if ($request->has('mobile_number')) {
                $record->where('mobile_number', $mobile_number);
            }
            if ($request->has('event_date')) {
                $record->where('event_date', $event_date);
            }
            if ($request->has('position')) {
                $record->where('position', $position);
            }
            $record =$record->paginate(15);
            return view('showresult', compact('record','countrylist','positionlist','eventlist','nature_of_business_list'));

    }

    public function sessionunset()
    {

      
        session()->forget(['first_name','sur_name','email_work','position','country','event_name','event_date','nature_of_business','mobile_number']);
         
        return view('showresult');
    }
}
