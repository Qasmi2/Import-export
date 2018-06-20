<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Excel;
use Illuminate\Http\Request;
use App\exceldata;
use DB;


class ExcelController extends Controller
{

	
	// redirect to importexport blade 
    public function importExport()
	{
		return view('importexport');
	}
	// redirect to record blade 
	public function recordForm()
	{
		// sending the event_id to the add Record form 
		$even_id =DB::table('exceldatas')->distinct()->get(['event_id']);
		return view('recordform')->with('event_id',$even_id);
	}

    // redirect Show All Result 
    public function showResult()
    {
		//session reset
		session()->forget(['first_name','sur_name','email_work','position','country','event_name','event_id','event_date','company','nature_of_business','mobile_number']);
		$record = exceldata::orderBy('created_at','desc')->paginate(15);
		$countrylist =DB::table('exceldatas')->distinct()->get(['country']);
		$positionlist = DB::table('exceldatas')->distinct()->get(['position']);
		$eventlist = DB::table('exceldatas')->distinct()->get(['event_name']);
		$nature_of_business_list = DB::table('exceldatas')->distinct()->get(['nature_of_business']);
		$company_list = DB::table('exceldatas')->distinct()->get(['company']);
		$event_id_list = DB::table('exceldatas')->distinct()->get(['event_id']);
		$event_date_list = DB::table('exceldatas')->distinct()->get(['event_date']);
		
		// testing 
			
			
			// $dataen = $positionlist->toArray();
			// $data11 = json_encode($dataen);
			// var_dump($data11);
			// exit();
			// $data = json_decode(json_encode($dataen),true);
			// var_dump($data);
			// exit();
		 

		// End testing 
		
		
		return view('showresult', compact('record','positionlist','countrylist','eventlist','nature_of_business_list','company_list','event_id_list','event_date_list'));

		// var_dump(json_encode($country));echo"<br>";
		// var_dump(json_encode($record));
		// foreach($country as $te){
		// 	echo $te->country;
		// 	echo "<br>";
		// }
		// exit();
		//return view('showresult', compact('record','countrylist'));
		// $record = array($record,$country);
		// foreach($record[1] as $te){
		// 	echo $te->country;
		// 	echo "<br>";
		// }
		// foreach($record[0] as $te){
		// 	echo $te->country;
		// 	echo "<br>";
		// }
		// exit();
       
        
	}
	  // show modelview of the signle recored
	  public function modelView($id)
	  {
		$record = exceldata::find($id);
		// $record = DB::table('exceldatas')->where('id', $id)->first();
		
		return view('showresultsingle', compact('record'));
	  }

	// edit 
	public function edit($id)
	{

		$record = exceldata::find($id);
		return view('editrecordfrom')->with('record', $record);
	}


	public function editResult(Request $request, $id)
	{

		$record =exceldata::find($id);
		$record->title = $request->input('title');
		$record->first_name = $request->input('first_name');
		$record->sur_name = $request->input('sur_name');
		$record->middle_name = $request->input('middle_name');
		$record->position = $request->input('position');
		$record->company = $request->input('company');
		$record->department = $request->input('department');
		$record->address1 = $request->input('address1');
		$record->address2 = $request->input('address2');
		$record->city = $request->input('city');
		$record->post_code = $request->input('post_code');
		$record->state = $request->input('state');
		$record->country = $request->input('country');
		$record->telephone_country = $request->input('telephone_country');
		$record->telephone_area = $request->input('telephone_area');
		$record->telephone = $request->input('telephone');
		$record->extention = $request->input('extention');
		$record->telephone_country_2 = $request->input('telephone_country_2');
		$record->telephone_2 = $request->input('telephone_2');
		$record->extention_2 = $request->input('extention_2');
		$record->facsimile_country = $request->input('facsimile_country');
		$record->facsimile = $request->input('facsimile');
		$record->mobile_area = $request->input('mobile_area');
		$record->mobile_number = $request->input('mobile_number');
		$record->mobile_area_2 = $request->input('mobile_area_2');
		$record->mobile_number_2 = $request->input('mobile_number_2');
		$record->email_work = $request->input('email_work');
		$record->email_private = $request->input('email_private');
		$record->company_website = $request->input('company_website');
		$record->email = $request->input('email');
		$record->age_group = $request->input('age_group');
		$record->gender = $request->input('gender');
		$record->nationality = $request->input('nationality');
		$record->nature_of_business = $request->input('nature_of_business');
		$record->category = $request->input('category');
		$record->event_id = $request->input('event_id');
		$record->event_name = $request->input('event_name');
		$record->event_date = $request->input('event_date');
		$record->event_place = $request->input('event_place');
		$record->maretingoptns = $request->input('maretingoptns');
		$record->opt_in = $request->input('opt_in');
		$record->opt_out = $request->input('opt_out');
		$record->neutral = $request->input('neutral');
		$record->history_mwan_events_attend = $request->input('history_mwan_events_attend');
		$record->comments = $request->input('comments');
		$record->unsubscribes = $request->input('unsubscribes');

		if($record->save()){
			return redirect()->back()->with('success','Record successfully updated.');
		}
		else{
			return redirect()->back()->with('error',' Record is not updated .');
		}
		//return view('editrecordfrom');
		//return redirect()->back()->with('success', 'edit Result link clicked, underconstuction edit link');
	}

    //delete the record
	public function deleteResult($id)
	{
		$record = exceldata::find($id);
		if($record){
			
			if($record->delete()){
			
				return redirect()->back()->with('success', 'Record Removed');
			
			}
			else{
				
				return redirect()->back()->with('error', 'Record is not Removed');
			}
		}
		else{
			return redirect()->back()->with('error', 'NO Record Found');
		}
			
	}
	 //delete the record form single one
	 public function deleteResultOne($id)
	 {
		 $record = exceldata::find($id);
		 if($record){
			 
			 if($record->delete()){
			 
				 return view('feedback')->with('success', 'Record Removed');
			 }
			 else{
				 
				 return view('feedback')->with('error', 'Record is not Removed');
			 }
		 }
		 else{
			 return view('feedback')->with('error', 'NO Record Found');
		 }
			 
	 }
    
   // Download Files
	public function downloadExcel($type)
	{
		$data = exceldata::get()->toArray();
		
		return Excel::create('Event_Data', function($exceldated) use ($data) {
		$exceldated->sheet('mySheet', function($sheet) use ($data)
	    {
			 $sheet->fromArray($data);
			// var_dump($sheet->fromArray($data));
			// exit();
	         });
		})->download($type);
	}
	 // Download Files on spacific query 
	 public function downloadExcelSpecific($type)
	 {

		$fname = session('first_name');
		// session(['mobile_number'=>$mobile_number,'event_data'=>$event_date,'country'=>$country,'position'=>$position,'event_name'=>$event_name,'event_id'=>$event_id,'compnay'=>$compnay,'nature_of_business'=>$nature_of_business,'first_name'=>$first_name,'sur_name'=>$sur_name,'email_work'=>$email_work]);
		
		 
		$first_name = session('first_name');
        $sur_name = session('sur_name');
        $email_work = session('email_work');
        $country = session('country');
        $position = session('position');
        $event_id =session('event_id');
        $event_name = session('event_name');
        $nature_of_business = session('nature_of_business');
        $mobile_number = session('mobile_number');
		$event_date = session('event_date');
		$company = session('company');
		
		$record = DB::table('exceldatas');
		// $record = exceldata::get();

		 if ($first_name != NULL){
			$record->where('first_name', $first_name);
		}

		if ($sur_name != NULL){
			$record->where('sur_name', $sur_name);
		}

		if ($email_work != NULL){
			$record->where('email_work', 'like', '%' . $email_work.'%');
		}
	

		if ($country != NULL){
			$record->where('country', $country);
		}
		
		if ($position != NULL){
			$record->where('position', 'like', '%' .$position .'%');
		}
	
		
		if ($event_id != NULL){
			$record->where('event_id', $event_id);
		}
		
		if ($event_name != NULL){
			$record->where('event_name', $event_name);
		}
		
		if ($nature_of_business != NULL){
			$record->where('nature_of_business', $nature_of_business);
		}

		if ($nature_of_business != NULL){
			$record->where('nature_of_business', $nature_of_business);
		}
		if ($mobile_number != NULL){
			$record->where('mobile_number', $mobile_number);
		}
		if ($event_date != NULL){
			$record->where('event_date', $event_date);
		}

		if ($company != NULL){
			$record->where('company', 'like', '%' .$company.'%');
		}
	

		$data1 = $record->get();
		//  $data1 =$record->get();
		  $dataen = $data1->toArray();
		  $data = json_decode(json_encode($dataen),true);
		// $data =  (explode(",",$datass));
		//  var_dump($data);
		//  exit();
		
		
			
		//  $data = exceldata::get()->toArray();
		 return Excel::create('Event_Data', function($exceldated) use ($data) {
		 $exceldated->sheet('mySheet', function($sheet) use ($data)
		 {
			$sheet->fromArray($data);
			// var_dump($sheet->fromArray($data));
			// exit();
			  });
		 })->download($type);
	 }


		// Download Files on spacific query 
		public function downloadSingle($id)
		{
			$type = 'csv';
			$data = exceldata::find($id)->toArray();
			return Excel::create('Single_Record', function($exceldated) use ($data) {
			$exceldated->sheet('mySheet', function($sheet) use ($data)
			{
				$sheet->fromArray($data);
				});
			})->download($type);
		}
	// import the CSV file into database 


	public function importExcel()
	{
		if(Input::hasFile('import_file')){
		$extension = Input::file('import_file')->getClientOriginalExtension();
		if($extension != "csv" )
		{
			return redirect()->back()->with('error','Please Make Sure the File Extension Should be CSV.');
		}
		else{
			$path = Input::file('import_file')->getRealPath();
			$data = Excel::load($path, function($reader) {
			})->get();
			
			if(!empty($data) && $data->count()){
				foreach ($data as $key => $value) {
					$insert[] = [

					'title'=>$value->title,
					'first_name'=>$value->first_name,
					'sur_name'=>$value->surname,
					'middle_name'=>$value->middle_name,
					'position'=>$value->position,
					'company'=>$value->company,
					'address1'=>$value->address1,
					'address2'=>$value->address2,
					'city'=>$value->city,
					'post_code'=>$value->post_code,
					'state'=>$value->state,
					'country'=>$value->country,
					'telephone_country'=>$value->telephone_country,
					'telephone_area'=>$value->telephone_area,
					'telephone' => $value->telephone, 
					'extention' => $value->extention, 
					'telephone_country_2'=>$value->telephone_country_2,
					'telephone_2' => $value->telephone_2, 
					'extention_2' => $value->extention_2, 
					'facsimile_country' => $value->facsimile_country,
					'facsimile_area'=>$value->facsimile_area,
					'facsimile'=> $value->facsimile,
					'mobile_area'=>$value->mobile_area,
					'mobile_number'=>$value->mobile_number,
					'mobile_area_2'=>$value->mobile_area_2,
					'mobile_number_2' => $value->mobile_number_2,
					 'email_work' => $value->email_work,
					'email_private'=>$value->email_private,
					'company_website'=>$value->company_website,
					'email'=> $value->email,'age_group'=>$value->age_group,
					'nationality'=>$value->nationality,
					'gender'=>$value->gender,
					'nature_of_business'=>$value->nature_of_business,
					'category'=> $value->category,
					'event_id'=> $value->eventid,
					'event_date'=> $value->event_date,
					'event_place'=> $value->event_place,
					'maretingoptns'=> $value->maretingoptns,
					'opt_in'=>$value->opt_in,
					'opt_out'=>$value->opt_out,
					'neutral'=>$value->neutral,
					'unsubscribes'=> $value->unsubscribes,
					'history_mwan_events_attend'=>$value->history_mwan_events_attend,
					'comments'=>$value->comments,];
				}
				if(!empty($insert)){
					DB::table('exceldatas')->insert($insert);
				    return redirect()->back()->with('success','Insert Record successfully.');
				}
			}
		}
		}
		return back();
	}

	// import Record importRecord
	public function importRecord(Request $request)
	{
		 // Handle File Upload
		 if($request->hasFile('cover_image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
			$path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
		
        } else {
            $fileNameToStore = 'noimage.jpg';
        }
		
		$record = new exceldata;
		$record->cover_image = $fileNameToStore;
		$record->title = $request->input('title');
		$record->first_name = $request->input('first_name');
		$record->sur_name = $request->input('sur_name');
		$record->middle_name = $request->input('middle_name');
		$record->position = $request->input('position');
		$record->company = $request->input('company');
		$record->department = $request->input('department');
		$record->address1 = $request->input('address1');
		$record->address2 = $request->input('address2');
		$record->city = $request->input('city');
		$record->post_code = $request->input('post_code');
		$record->state = $request->input('state');
		$record->country = $request->input('country');
		$record->telephone_country = $request->input('telephone_country');
		$record->telephone_area = $request->input('telephone_area');
		$record->telephone = $request->input('telephone');
		$record->extention = $request->input('extention');
		$record->telephone_country_2 = $request->input('telephone_country_2');
		$record->telephone_2 = $request->input('telephone_2');
		$record->extention_2 = $request->input('extention_2');
		$record->facsimile_country = $request->input('facsimile_country');
		$record->facsimile = $request->input('facsimile');
		$record->mobile_area = $request->input('mobile_area');
		$record->mobile_number = $request->input('mobile_number');
		$record->mobile_area_2 = $request->input('mobile_area_2');
		$record->mobile_number_2 = $request->input('mobile_number_2');
		$record->email_work = $request->input('email_work');
		$record->email_private = $request->input('email_private');
		$record->company_website = $request->input('company_website');
		$record->email = $request->input('email');
		$record->age_group = $request->input('age_group');
		$record->gender = $request->input('gender');
		$record->nationality = $request->input('nationality');
		$record->nature_of_business = $request->input('nature_of_business');
		$record->category = $request->input('category');
		$record->event_id = $request->input('event_id');
		$record->event_name = $request->input('event_name');
		$record->event_date = $request->input('event_date');
		$record->event_place = $request->input('event_place');
		$record->maretingoptns = $request->input('maretingoptns');
		$record->opt_in = $request->input('opt_in');
		$record->opt_out = $request->input('opt_out');
		$record->neutral = $request->input('neutral');		
		$record->history_mwan_events_attend = $request->input('history_mwan_events_attend');
		$record->comments = $request->input('comments');
		$record->unsubscribes = $request->input('unsubscribes');

	

		if($record->save()){
			return redirect()->back()->with('success','Insert Record successfully.');
		}
		else{
			return redirect()->back()->with('error',' Record is not Insert .');
		}
		
       
	}



//END Excel Controller function 
}


