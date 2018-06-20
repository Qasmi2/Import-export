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
        
       
        <div class="col-md-12 col-lg-12 col-sm-12" style="background-color:white; font-size:18px;">    
         
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
        </div>
    </div>
</div>
 @endsection
 