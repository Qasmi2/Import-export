@extends('layouts.app')
@include('flash')
@section('content')
	@if (session('status'))
        <div class="alert alert-success">
           {{ session('status') }}                   
        </div>
    @endif
    <script>
            $(document).ready(function() {
            $('a[data-confirm]').click(function(ev) {
            var href = $(this).attr('href');
            if (!$('#dataConfirmModal').length) {
            $('body').append('<div id="dataConfirmModal" class="modal fade modal" role="dialog" aria-labelledby="dataConfirmLabel" aria-hidden="true"><div class="modal-dialog "><div class="modal-content"><div class=" modal-header" ><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><h3 id="dataConfirmLabel" >Please Confirm</h3></div><div class="modal-body"></div><div class="modal-footer"><button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button><a class="btn btn-danger" id="dataConfirmOK">Delete</a></div></div></div></div>');
            } 
            $('#dataConfirmModal').find('.modal-body').text($(this).attr('data-confirm'));
            $('#dataConfirmOK').attr('href', href);
            $('#dataConfirmModal').modal({show:true});
            return false;
                });
        });
    </script>
    <div id="app">
    <div class="container" >
    <a href="http://eventsdatabase.mwancloud.com/home" class="btn btn-default">HOME PAGE</a>
    
        <div class="text-center">
            <h1 style="color:green;">{{$record->first_name}}  {{$record->sur_name}}   Record</h1>
        </div>
        <div>
        <a href="javascript:history.back();" class="btn btn-default">Go Back</a>
        
        <div style="float:right;">
        <a href="{{ url('editing/'.$record->id)}}" class="btn btn-warning">Edit</a> 
        <a href="{{ url('deletesingle/'.$record->id) }}" data-confirm="Are you sure you want to delete?" class="btn btn-danger">Delete</a>
        </div>
        </div>
        <div>
        <img  src="../storage/cover_images/{{$record->cover_image}}" style="height: 200px;">
        </div>
        <fieldset class="col-md-12" style="background-color:#fff; margin-top:20px;">    	
        <legend>Personal Info</legend>
        <div class="col-md-12 col-lg-12 col-sm-12">    
            <div class="form-group row">
                <div class="col-md-4">
                    <div class="p-3 mb-2 bg-success text-white">  <label for="title" style="margin-top: 5px;margin-left: 10px;">{{ __('Title') }}    :</label>
                        {{$record->title}}
                    </div>
                    <br>
                    <div class="p-3 mb-2 bg-success text-white"> <label for="title" style="margin-top: 5px;margin-left: 10px;">{{ __('First Name') }}    :</label>
                        {{$record->first_name}} 
                    </div>
                    <br>
                    <div class="p-3 mb-2 bg-success text-white"> <label for="title" style="margin-top: 5px;margin-left: 10px;">{{ __('Surname') }}   :</label>
                        {{$record->sur_name}}
                    </div>
                    <br>

                    <div class="p-3 mb-2 bg-success text-white"> <label for="title" style="margin-top: 5px;margin-left: 10px;">{{ __('Middle Name') }}    :</label>
                         {{$record->middle_name}}
                    </div>

                </div>

                <div class="col-md-4 ">
                    <div class="p-3 mb-2 bg-success text-white"> <label for="position" style="margin-top: 5px;margin-left: 10px;">{{ __('Position') }}    :</label>
                        {{$record->position}} 
                    </div>
                    <br>
                    <div class="p-3 mb-2 bg-success text-white"> <label for="company" style="margin-top: 5px;margin-left: 10px;">{{ __('Company') }}    :</label>
                        {{$record->company}} 
                    </div>
                    <br>
                    <div class="p-3 mb-2 bg-success text-white"> <label for="department" style="margin-top: 5px;margin-left: 10px;">{{ __('Department') }}    :</label>
                        {{$record->department}}
                    </div>

                </div>

               
                <div class="col-md-4">
                    <div class="p-3 mb-2 bg-success text-white">  <label for="age_group" style="margin-top: 5px;margin-left: 10px;">{{ __('Age Group') }}    :</label>
                        {{$record->age_group}}
                    </div> 
                    <br>
                    <div class="p-3 mb-2 bg-success text-white">  <label for="gender" style="margin-top: 5px;margin-left: 10px;">{{ __('Gender') }}    :</label>
                        {{$record->gender}}
                    </div>
                    <br>
                    <div class="p-3 mb-2 bg-success text-white">  <label for="nationality" style="margin-top: 5px;margin-left: 10px;">{{ __('Nationality') }}    :</label>
                        {{$record->nationality}}
                    </div>
                    <br>
                </div>

              

            </div>
        </div>
    </fieldset>	
    <fieldset class="col-md-12" style="background-color:#fff; margin-top:20px;">    	
        <legend>Contact Info</legend>
        
        <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="form-group row">
                    <div class="col-md-4">
                        <div class="p-3 mb-2 bg-info text-white"> <label for="address1" style="margin-top: 5px;margin-left: 10px;">{{ __('Address1') }}    :</label>
                            <br> {{$record->address1}}
                        </div>
                         <br>
                        <div class="p-3 mb-2 bg-info text-white"><label for="address2" style="margin-top: 5px;margin-left: 10px;">{{ __('Address2') }}    :</label>
                           <br> {{$record->address2}}
                        </div>
                        <br>
                        <div class="p-3 mb-2 bg-info text-white"><label for="city" style="margin-top: 5px;margin-left: 10px;">{{ __('City') }}    :</label>
                            {{$record->city}}
                        </div>
                        <br>
                        <div class="p-3 mb-2 bg-info text-white"><label for="post_code" style="margin-top: 5px;margin-left: 10px;">{{ __('Postcode') }}    :</label>
                            {{$record->post_code}}
                        </div>
                        <br>
                        <div class="p-3 mb-2 bg-info text-white"><label for="state" style="margin-top: 5px;margin-left: 10px;">{{ __('State') }}    :</label>                  
                            {{$record->state}}
                        </div>
                        <br>
                        <div class="p-3 mb-2 bg-info text-white"><label for="country" style="margin-top: 5px;margin-left: 10px;">{{ __('Country') }}    :</label>
                             {{$record->country}}
                        </div>

                    </div>
                
                    <div class="col-md-4 ">
                        <div class="p-3 mb-2 bg-info text-white"><label for="telephone_country" style="margin-top: 5px;margin-left: 10px;">{{ __('Country Code') }}    :</label>
                             {{$record->telephone_country}}
                        </div>
                        <br>
                        <div class="p-3 mb-2 bg-info text-white"><label for="telephone" style="margin-top: 5px;margin-left: 10px;">{{ __('Telephone') }}    :</label>
                            {{$record->telephone}} 
                        </div>
                        <br>
                        <div class="p-3 mb-2 bg-info text-white"><label for="extention" style="margin-top: 5px;margin-left: 10px;">{{ __('Extention') }}    :</label>
                            {{$record->extention}}
                        </div>
                        <br>
                        <div class="p-3 mb-2 bg-info text-white"><label for="telephone_country_2" style="margin-top: 5px;margin-left: 10px;">{{ __('Country Code (2)') }}    :</label>
                            {{$record->telephone_country_2}}
                        </div>
                        <br>
                        <div class="p-3 mb-2 bg-info text-white"> <label for="telephone_2" style="margin-top: 5px;margin-left: 10px;">{{ __('Telephone (2)') }}    :</label>
                            {{$record->telephone_2}}  
                        </div>
                        <br>
                        <div class="p-3 mb-2 bg-info text-white"> <label for="extention_2" style="margin-top: 5px;margin-left: 10px;">{{ __('Extention (2)') }}    :</label>
                        {{$record->extention_2}}
                        </div>
                        <br>
                        <div class="p-3 mb-2 bg-info text-white"><label for="facsimile_country" style="margin-top: 5px;margin-left: 10px;">{{ __('Fax Country Code') }}    :</label>
                        {{$record->facsimile_country}}
                        </div>
                        <br>
                        <div class="p-3 mb-2 bg-info text-white"><label for="facsimile" style="margin-top: 5px;margin-left: 10px;">{{ __('Fax No.') }}    :</label>
                        {{$record->facsimile}}
                        </div>
                        <br>
                        <div class="p-3 mb-2 bg-info text-white"><label for="mobile_area" style="margin-top: 5px;margin-left: 10px;">{{ __('Country Code') }}    :</label>
                            {{$record->mobile_area}} 
                        </div>
                        <br>
                        <div class="p-3 mb-2 bg-info text-white"><label for="mobile_number" style="margin-top: 5px;margin-left: 10px;">{{ __('Mobile Number') }}    :</label>
                            {{$record->mobile_number}}
                        </div>
                        <br>
                        <div class="p-3 mb-2 bg-info text-white"><label for="mobile_area_2" style="margin-top: 5px;margin-left: 10px;">{{ __('Country Code (2)') }}    : </label>
                            {{$record->mobile_area_2}}
                        </div>
                        <br>
                        <div class="p-3 mb-2 bg-info text-white"><label for="mobile_number_2" style="margin-top: 5px;margin-left: 10px;">{{ __('Mobile Number (2)') }}    :</label>
                        {{$record->mobile_number_2}}
                        </div>
                        

                    </div>
                    <div class="col-md-4 ">
                        <div class="p-3 mb-2 bg-info text-white"> <label for="email_work" style="margin-top: 5px;margin-left: 10px;">{{ __('Email Work') }}    :</label>
                            {{$record->email_work}}
                        </div>
                        <br>
                        <div class="p-3 mb-2 bg-info text-white"><label for="email_private" style="margin-top: 5px;margin-left: 10px;">{{ __('Private Email') }}    :</label>
                             {{$record->email_private}}
                         </div>
                        <br>
                        <div class="p-3 mb-2 bg-info text-white"><label for="email" style="margin-top: 5px;margin-left: 10px;">{{ __('Email') }}    :</label>
                            {{$record->email}}
                        </div>
                        <br>
                        <div class="p-3 mb-2 bg-info text-white"><label for="company_website" style="margin-top: 5px;margin-left: 10px;">{{ __('Company Website') }}    :</label>
                            {{$record->company_website}}
                        </div>
                            
                    </div>
               </div>
        </div>
    </fieldset>	
    <fieldset class="col-md-12" style="background-color:#fff; margin-top:20px;">    	
        <legend>Event Info</legend>
        <div class="col-md-12 col-lg-12 col-sm-12">
            
            <div class="form-group row">
                <div class="col-md-4">
                <div class="p-3 mb-2 bg-success text-white"><label for="category" style="margin-top: 5px;margin-left: 10px;">{{ __('Category') }}    :</label>
                   {{$record->category}}
                </div>
                   <br>
                   <div class="p-3 mb-2 bg-success text-white"><label for="event_id" style="margin-top: 5px;margin-left: 10px;">{{ __('Event ID') }}    :</label>
                    {{$record->event_id}}
                    
                    </div>
                    
                   
                </div>
                 
                <div class="col-md-4 ">
                <div class="p-3 mb-2 bg-success text-white"><label for="event_name" style="margin-top: 5px;margin-left: 10px;">{{ __('Event Name') }}    :</label>
                    {{$record->event_name}}
                    </div>
                    <br> 
                <div class="p-3 mb-2 bg-success text-white"><label for="event_date" style="margin-top: 5px;margin-left: 10px;">{{ __('Event Date') }}    :</label>
                    {{$record->event_date}}
                    </div>
                    <br>
                    <div class="p-3 mb-2 bg-success text-white"> <label for="event_place" style="margin-top: 5px;margin-left: 10px;">{{ __('Event Place') }}    :</label>
                    {{$record->event_place}}
                    </div>
                </div>

                <div class="col-md-4 ">
                     <div class="p-3 mb-2 bg-success text-white"> <label for="history_mwan_events_attend" style="margin-top: 5px;margin-left: 10px;">{{ __('Events History') }}    :</label>
                        {{$record->history_mwan_events_attend}}
                    </div>
                </div>
                
            </div>
        </div>
    </fieldset>
    <fieldset class="col-md-12" style="background-color:#fff; margin-top:20px;">    	
        <legend>Subscribes</legend>
         <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="form-group row">

                   <div class="col-md-6">
                   <div class="p-3 mb-2 bg-success text-white"><label for="maretingoptns" style="margin-top: 5px;margin-left: 10px;">{{ __('MARKETING OPT-INS') }}    :</label>
                   {{$record->maretingoptns}}
                  
                   </div>
                  
                </div>

                <div class="col-md-6">
                    <div class="p-3 mb-2 bg-success text-white"><label for="unsubscribes" style="margin-top: 5px;margin-left: 10px;">{{ __('Subscribes News') }}    :</label>
                  
                    {{$record->unsubscribes}}
                    </div>
                   
                </div> 
                    
                
                    
               </div>
        </div>
        <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="form-group row">

                   <div class="col-md-6">
                        <div class="p-3 mb-2 bg-success text-white"> <label for="opt_in" style="margin-top: 5px;margin-left: 10px;">{{ __('Date Opts-in') }}    :</label>
                        {{$record->opt_in}}
                    
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="p-3 mb-2 bg-success text-white"><label for="opt_out" style="margin-top: 5px;margin-left: 10px;">{{ __('Date Opts-out') }}    :</label>
                        {{$record->opt_out}}
                    
                        <div>
                    </div> 

                    <!-- <div class="col-md-4">
                        <div class="p-3 mb-2 bg-success text-white"><label for="neutral" style="margin-top: 5px;margin-left: 10px;">{{ __('Date Neutral') }}    :</label>
                        {{$record->neutral}}
                    
                        </div> -->
                    </div> 
               </div>
        </div>
        </div>

          <div class="col-md-12 col-lg-12 col-sm-12">
            
            <div class="form-group row">
                <div class="col-md-12 ">
                    <div class="p-3 mb-2 bg-success text-white"><label for="comments" style="margin-top: 5px;margin-left: 10px;">{{ __('Comments') }}    :</label>
                    
                     {{$record->comments}}
                    </div>
                </div>

            </div>
        </div>
        
    </fieldset>

        
        <!-- <div class="col-md-12 col-lg-12 col-sm-12" style="background-color:white; font-size:18px;">    
         
            <div class="form-group row">
                <div class="col-md-3">  
                        <div class="text-center">
                            <h3 style="color:green;"><b>Personer Info</b></h3>
                        </div>
                        <hr>
                    <span >
                    
                       <b>Title: </b><br>{{$record->title}}<br>
                       <b>First Name   : </b><br> {{$record->first_name}} <br>
                       <b> Middle Name : </b><br> {{$record->sur_name}}<br>
                       <b>Surname : </b><br> {{$record->middle_name}}<br>
                       <b> Position : </b><br> {{$record->position}} <br>
                       <b>Department : </b><br>{{$record->department}} <br>
                       <b>Company : </b><br> {{$record->company}} <br>
                       <b>Age Group :  </b><br> {{$record->age_group}}<br>
                       <b>Nationality : </b><br>{{$record->nationality}}<br>
                       <b>Nature Of Business : </b><br>  {{$record->nature_of_business}}<br>
                    </span>
                   
                    
                </div>

                <div class="col-md-6">  
                    <div class="text-center">
                        <h3 style="color:green;"><b>Contact Info</b></h3>
                    </div>
                    <hr>
                   
                   
                    <div class="col-md-6">  
                    <b>Address1:</b><br>{{$record->address1}}<br>
                    <b>City:</b><br> {{$record->city}}<br>
                    <b>Country:</b><br>{{$record->country}}<br>
                    <b>Telephone:</b><br>{{$record->telephone_country}}-{{$record->telephone}} :<b> Ext:</b>  {{$record->extention}}<br>
                    <b>Fax :</b><br>{{$record->facsimile_country}}-{{$record->facsimile}}<br>
                    <b>Mobile No. :</b><br>{{$record->mobile_area}}- {{$record->mobile_number}}<br>
                    <b>Email Work :</b><br>{{$record->email_work}}<br>
                    <b>Private Email :</b><br>{{$record->email_private}}<br>
                    </div>
                    <div class="col-md-6">  
                    <b>Address2:</b><br>{{$record->address2}}<br>
                    <b>State:</b><br>{{$record->state}}<br>
                    <b>Postcode:</b><br>{{$record->post_code}}<br>
                    <b>Telephone 2:</b><br>{{$record->telephone_country_2}}-{{$record->telephone_2}}:<b> Ext:</b>  {{$record->extention}}<br>
                    <b>Mobile No. :</b><br>{{$record->mobile_area_2}}- {{$record->mobile_number_2}}<br>
                    
                    <b>Email :</b><br>{{$record->email}}<br>
                    <b>Company Website :</b><br> {{$record->company_website}}<br>
                    </div>  
                </div>

                <div class="col-md-3">  
                    <div class="text-center">
                        <h3 style="color:green;"><b>Event Info</b></h3>
                    </div>
                    <hr>
                   <b>Category:</b><br> {{$record->category}}<br>
                   <b>Event_id:</b><br> {{$record->event_id}}<br>
                   <b>Event_id:</b> <br> {{$record->event_id}}<br>
                   <b>Event_date:</b><br>  {{$record->event_date}}<br>
                   <b>Event_place:</b><br> {{$record->event_place}}<br>
                    <div class="text-center">
                        <h3 style="color:green;"><b>Subscription</b></h3>
                        <hr>
                    </div>
                    <b>maretingoptns:</b><br>  {{$record->maretingoptns}}
                    <b>opt_in:</b> <br> {{$record->opt_in}}
                    <b>opt_out:</b><br>  {{$record->opt_out}}
                    <b>neutral:</b><br> {{$record->neutral}}
                    <b>history_mwan_events_attend:</b><br> {{$record->history_mwan_events_attend}}
                    <b>comments:</b><br> {{$record->comments}}
                    <b>Subscribes:</b> <br> {{$record->unsubscribes}}
                </div>
            </div>
        </div> -->
    </div>
</div>
 @endsection
 