@extends('layouts.app')
@include('flash')
@section('content')
	@if (session('status'))
       <div class="alert alert-success">
           {{ session('status') }}                   
        </div>
    @endif
<!------------------------------ From -------------------------------------------- -->


    <div id="app">
    <div class="container">
    <a href="http://eventsdatabase.mwancloud.com/home" class="btn btn-default">HOME PAGE</a>
        <div class="text-center">
        <h1>EDIT RECORD</h1>
        </div>
        <hr>
        <form method="POST" action="{{ url('update/'.$record->id)}}">
       <!-- route('update/'.$record->id) -->
        {{ csrf_field() }}
        <!-- <div class="col-md-12 col-lg-12 col-sm-12">
            <div class="form-group row">
                <div class="col-md-3">
                <label for="title">{{ __('Title') }}</label>
                    <input id="title" type="text" placeholder="Enter Title " class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ $record->title }}" >
                    @if ($errors->has('title'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('title') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
        </div> -->
    <fieldset class="col-md-12" style="background-color:#fff;">    	
        <legend>Personal Info</legend>
            <div class="col-md-12 col-lg-12 col-sm-12">
        
                    <div class="form-group row">
                    <div class="col-md-3">
                    <label for="title">{{ __('Title') }}</label>
                        <input id="title" type="text" placeholder="Enter Title " class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ $record->title }}" >
                        @if ($errors->has('title'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('title') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="col-md-3 ">
                        <label for="title">{{ __('First Name') }}</label>
                        <input id="first_name" type="text" placeholder="Enter First Name " class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" value="{{ $record->first_name }}" >
                        @if ($errors->has('first_name'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('first_name') }}</strong>
                            </span>
                        @endif
                    </div>

                   
                    <div class="col-md-3">
                        <label for="title">{{ __('Surname') }}</label>
                        <input id="sur_name" type="text" placeholder="Enter Surname " class="form-control{{ $errors->has('sur_name') ? ' is-invalid' : '' }}" name="sur_name" value="{{ $record->sur_name }}" >
                        @if ($errors->has('sur_name'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('sur_name') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="col-md-3">
                        <label for="title">{{ __('Middle Name') }}</label>
                        <input id="middle_name" type="text" placeholder="Enter Middle Name " class="form-control{{ $errors->has('middle_name') ? ' is-invalid' : '' }}" name="middle_name" value="{{ $record->middle_name }}">
                        @if ($errors->has('middle_name'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('middle_name') }}</strong>
                            </span>
                        @endif
                    </div>

                </div>
            </div>
       
            <div class="col-md-12 col-lg-12 col-sm-12">
                
                <div class="form-group row">
                    <div class="col-md-4 ">
                        <label for="position">{{ __('Position') }}</label>
                        <input id="position" type="text" placeholder="Enter Position " class="form-control{{ $errors->has('position') ? ' is-invalid' : '' }}" name="position" value="{{ $record->position }}" >
                        @if ($errors->has('position'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('position') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="col-md-4">
                        <label for="title">{{ __('Company') }}</label>
                        <input id="company" type="text" placeholder="Enter Company " class="form-control{{ $errors->has('company') ? ' is-invalid' : '' }}" name="company" value="{{ $record->company }}" >
                        @if ($errors->has('company'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('company') }}</strong>
                            </span>
                        @endif
                    </div>

                    
                    <div class="col-md-4">
                        <label for="department">{{ __('Department') }}</label>
                        <input id="department" type="text" placeholder="Enter department " class="form-control{{ $errors->has('department') ? ' is-invalid' : '' }}" name="department" value="{{  $record->department}}" >
                        @if ($errors->has('department'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('department') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
    
                <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="form-group row">
                    <div class="col-md-3 ">
                        <label for="age_group">{{ __('AGE Group') }}</label>
                        <input id="age_group" type="text" placeholder="Enter Age Group " class="form-control{{ $errors->has('age_group') ? ' is-invalid' : '' }}" name="age_group" value="{{ $record->age_group }}" >
                        @if ($errors->has('age_group'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('age_group') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="col-md-3 ">
                        <label for="gender">{{ __('Gender') }}</label>
                        <input id="gender" type="text" placeholder="Enter Gender " class="form-control{{ $errors->has('Gender') ? ' is-invalid' : '' }}" name="gender" value="{{ $record->gender }}" >
                        @if ($errors->has('gender'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('gender') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="col-md-3 ">
                        <label for="nationality">{{ __('Nationality') }}</label>
                        <input id="nationality" type="text" placeholder="Enter Nationality " class="form-control{{ $errors->has('nationality') ? ' is-invalid' : '' }}" name="nationality" value="{{ $record->nationality }}" >
                        @if ($errors->has('nationality'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('nationality') }}</strong>
                            </span>
                        @endif
                    </div>

                
                    <div class="col-md-3">
                        <label for="nature_of_business">{{ __('Nature Of Business') }}</label>
                        <input id="nature_of_business" type="text" placeholder="Enter Nature Of Business " class="form-control{{ $errors->has('nature_of_business') ? ' is-invalid' : '' }}" name="nature_of_business" value="{{ $record->nature_of_business }}" >
                        @if ($errors->has('nature_of_business'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('nature_of_business') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
    </fieldset>
    <fieldset class="col-md-12" style="background-color:#fff;margin-top:20px;">    	
        <legend>Contact Info</legend>
            <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="address1">{{ __('Address1') }}</label>
                        <input id="address1" type="text" placeholder="Enter Address1 " class="form-control{{ $errors->has('address1') ? ' is-invalid' : '' }}" name="address1" value="{{ $record->address1 }}" >
                        @if ($errors->has('address1'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('address1') }}</strong>
                            </span>
                        @endif
                    </div>
                    
                
                    <div class="col-md-6 ">
                        <label for="address2">{{ __('Address2') }}</label>
                        <input id="address2" type="text" placeholder="Enter Address2 " class="form-control{{ $errors->has('address2') ? ' is-invalid' : '' }}" name="address2" value="{{ $record->address2 }}" >
                        @if ($errors->has('address2'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('address2') }}</strong>
                            </span>
                        @endif
                    </div>
               </div>
            </div>

        <div class="col-md-12 col-lg-12 col-sm-12">
            
            <div class="form-group row">
                <div class="col-md-3 ">
                    <label for="city">{{ __('City') }}</label>
                    <input id="first_name" type="text" placeholder="Enter City " class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" value="{{ $record->city }}" >
                    @if ($errors->has('city'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('city') }}</strong>
                        </span>
                    @endif
                </div>

               
                <div class="col-md-3">
                    <label for="post_code">{{ __('Postcode') }}</label>
                    <input id="post_code" type="text" placeholder="Enter postcode " class="form-control{{ $errors->has('post_code') ? ' is-invalid' : '' }}" name="post_code" value="{{ $record->post_code }}">
                    @if ($errors->has('post_code'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('post_code') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="col-md-3">
                    <label for="state">{{ __('State') }}</label>
                    <input id="state" type="text" placeholder="Enter state " class="form-control{{ $errors->has('state') ? ' is-invalid' : '' }}" name="state" value="{{ $record->state }}" >
                    @if ($errors->has('state'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('state') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="col-md-3">
                    <label for="country">{{ __('Country') }}</label>
                    <input id="country" type="text" placeholder="Enter country " class="form-control{{ $errors->has('country') ? ' is-invalid' : '' }}" name="country" value="{{ $record->country }}" >
                    @if ($errors->has('country'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('country') }}</strong>
                        </span>
                    @endif
                </div>

            </div>
        </div>

        <div class="col-md-12 col-lg-12 col-sm-12">
            
            <div class="form-group row">
                <div class="col-md-4 ">
                    <label for="telephone_country">{{ __('Country Code') }}</label>
                    <input id="telephone_country" type="text" placeholder="Enter Country Code " class="form-control{{ $errors->has('telephone_country') ? ' is-invalid' : '' }}" name="telephone_country" value="{{ $record->telephone_country}}" >
                    @if ($errors->has('telephone_country'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('telephone_country') }}</strong>
                        </span>
                    @endif
                </div>


                <div class="col-md-4">
                    <label for="telephone">{{ __('Telephone') }}</label>
                    <input id="telephone" type="text" placeholder="Enter telephone " class="form-control{{ $errors->has('telephone') ? ' is-invalid' : '' }}" name="telephone" value="{{ $record->telephone }}" >
                    @if ($errors->has('telephone'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('telephone') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="col-md-4">
                    <label for="extention">{{ __('Extention') }}</label>
                    <input id="extention" type="text" placeholder="Enter extention " class="form-control{{ $errors->has('extention') ? ' is-invalid' : '' }}" name="extention" value="{{ $record->extention}}" >
                    @if ($errors->has('extention'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('extention') }}</strong>
                        </span>
                    @endif
                </div>

            </div>
        </div>
        <div class="col-md-12 col-lg-12 col-sm-12">
            
            <div class="form-group row">
                <div class="col-md-4 ">
                    <label for="telephone_country_2">{{ __('Country Code (2)') }}</label>
                    <input id="telephone_country_2" type="text" placeholder="Enter Country Code (2) " class="form-control{{ $errors->has('telephone_country_2') ? ' is-invalid' : '' }}" name="telephone_country_2" value="{{ $record->telephone_country_2}}" >
                    @if ($errors->has('telephone_country_2'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('telephone_country_2') }}</strong>
                        </span>
                    @endif
                </div>


                <div class="col-md-4">
                    <label for="telephone_2">{{ __('Telephone (2)') }}</label>
                    <input id="telephone_2" type="text" placeholder="Enter telephone (2) " class="form-control{{ $errors->has('telephone_2') ? ' is-invalid' : '' }}" name="telephone_2" value="{{ $record->telephone_2 }}" >
                    @if ($errors->has('telephone_2'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('telephone_2') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="col-md-4">
                    <label for="extention_2">{{ __('Extention (2)') }}</label>
                    <input id="extention_2" type="text" placeholder="Enter extention (2) " class="form-control{{ $errors->has('extention_2') ? ' is-invalid' : '' }}" name="extention_2" value="{{ $record->extention_2}}" >
                    @if ($errors->has('extention_2'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('extention_2') }}</strong>
                        </span>
                    @endif
                </div>

            </div>
        </div>
      
        <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="facsimile_country">{{ __('Facsimile Country') }}</label>
                        <input id="facsimile_country" type="text" placeholder="Enter facsimile_country " class="form-control{{ $errors->has('facsimile_country') ? ' is-invalid' : '' }}" name="facsimile_country" value="{{ $record->facsimile_country }}" >
                        @if ($errors->has('facsimile_country'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('facsimile_country') }}</strong>
                            </span>
                        @endif
                    </div>
                    
                
                    <div class="col-md-6 ">
                        <label for="facsimile">{{ __('Facsimile') }}</label>
                        <input id="facsimile" type="text" placeholder="Enter facsimile " class="form-control{{ $errors->has('facsimile') ? ' is-invalid' : '' }}" name="facsimile" value="{{ $record->facsimile }}" >
                        @if ($errors->has('facsimile'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('facsimile') }}</strong>
                            </span>
                        @endif
                    </div>
               </div>
        </div>
        <div class="col-md-12 col-lg-12 col-sm-12">
            
            <div class="form-group row">
                <div class="col-md-2 ">
                    <label for="mobile_area">{{ __('Mobile Area') }}</label>
                    <input id="mobile_area" type="text" placeholder="Enter mobile Area " class="form-control{{ $errors->has('mobile_area') ? ' is-invalid' : '' }}" name="mobile_area" value="{{ $record->mobile_area }}" >
                    @if ($errors->has('mobile_area'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('mobile_area') }}</strong>
                        </span>
                    @endif
                </div>

               
                <div class="col-md-4">
                    <label for="mobile_number">{{ __('Mobile Number') }}</label>
                    <input id="mobile_number" type="text" placeholder="Enter mobile_number " class="form-control{{ $errors->has('mobile_number') ? ' is-invalid' : '' }}" name="mobile_number" value="{{ $record->mobile_number }}" >
                    @if ($errors->has('mobile_number'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('mobile_number') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="col-md-2">
                    <label for="mobile_area_2">{{ __('Mobile Area (2)') }}</label>
                    <input id="mobile_area_2" type="text" placeholder="Enter Mobile Area (opt) " class="form-control{{ $errors->has('mobile_area_2') ? ' is-invalid' : '' }}" name="mobile_area_2" value="{{ $record->mobile_area_2 }}" d>
                    @if ($errors->has('mobile_area_2'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('mobile_area_2') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="col-md-4">
                    <label for="mobile_number_2">{{ __('Mobile Number (2)') }}</label>
                    <input id="mobile_number_2" type="text" placeholder="Enter Mobile Number (opt) " class="form-control{{ $errors->has('mobile_number_2') ? ' is-invalid' : '' }}" name="mobile_number_2" value="{{ $record->mobile_number_2 }}" >
                    @if ($errors->has('mobile_number_2'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('mobile_number_2') }}</strong>
                        </span>
                    @endif
                </div>

            </div>
        </div>

        <div class="col-md-12 col-lg-12 col-sm-12">
            
            <div class="form-group row">
                <div class="col-md-3 ">
                    <label for="email_work">{{ __('Email Work') }}</label>
                    <input id="email_work" type="text" placeholder="Enter Email Work " class="form-control{{ $errors->has('email_work') ? ' is-invalid' : '' }}" name="email_work" value="{{ $record->email_work }}" >
                    @if ($errors->has('email_work'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('email_work') }}</strong>
                        </span>
                    @endif
                </div>

               
                <div class="col-md-3">
                    <label for="email_private">{{ __('Private Email') }}</label>
                    <input id="email_private" type="text" placeholder="Enter Email Private " class="form-control{{ $errors->has('email_private') ? ' is-invalid' : '' }}" name="email_private" value="{{ $record->email_private }}" >
                    @if ($errors->has('email_private'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('email_private') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="col-md-3">
                    <label for="email">{{ __('Email') }}</label>
                    <input id="email" type="text" placeholder="Enter email " class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $record->email }}" >
                    @if ($errors->has('email'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="col-md-3">
                    <label for="company_website">{{ __('Company Website') }}</label>
                    <input id="company_website" type="text" placeholder="Enter Company Website " class="form-control{{ $errors->has('company_website') ? ' is-invalid' : '' }}" name="company_website" value="{{$record->company_website }}" >
                    @if ($errors->has('company_website'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('company_website') }}</strong>
                        </span>
                    @endif
                </div>

            </div>
        </div>
    </fieldset>

    <fieldset class="col-md-12" style="background-color:#fff; margin-top:20px;">    	
        <legend>Comments</legend>
        <div class="col-md-12 col-lg-12 col-sm-12">
            
            <div class="form-group row">
                <div class="col-md-3">
                    <label for="category">{{ __('Category') }}</label>
                    <input id="category" type="text" placeholder="Enter category " class="form-control{{ $errors->has('category') ? ' is-invalid' : '' }}" name="category" value="{{ $record->category}}" >
                    @if ($errors->has('category'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('category') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="col-md-3 ">
                    <label for="event_id">{{ __('Event ID') }}</label>
                    <input id="event_id" type="text" placeholder="Enter Event ID " class="form-control{{ $errors->has('event_id') ? ' is-invalid' : '' }}" name="event_id" value="{{$record->event_id}}">
                    @if ($errors->has('event_id'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('event_id') }}</strong>
                        </span>
                    @endif
                </div> 
                <div class="col-md-3 ">
                    <label for="event_name">{{ __('Event Name') }}</label>
                    <input id="event_name" type="text" placeholder="Enter Event Name " class="form-control{{ $errors->has('event_name') ? ' is-invalid' : '' }}" name="event_name" value="{{ $record->event_name }}" >
                    @if ($errors->has('event_name'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('event_name') }}</strong>
                        </span>
                    @endif
                </div>

                 <div class="col-md-3 ">
                    <label for="event_date">{{ __('Event Date') }}</label>
                    <input id="event_date" type="text" placeholder="Enter Event Date " class="form-control{{ $errors->has('event_date') ? ' is-invalid' : '' }}" name="event_date" value="{{ $record->event_date }}" >
                    @if ($errors->has('event_date'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('event_date') }}</strong>
                        </span>
                    @endif
                </div>


            </div>
        </div>
        <div class="col-md-12 col-lg-12 col-sm-12">
            
            <div class="form-group row">
                <div class="col-md-3 ">
                    <label for="event_place">{{ __('Event Place') }}</label>
                    <input id="event_place" type="text" placeholder="Enter Event Place " class="form-control{{ $errors->has('event_place') ? ' is-invalid' : '' }}" name="event_place" value="{{ $record->event_place}}" >
                    @if ($errors->has('event_place'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('event_place') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="col-md-3 ">
                    <label for="history_mwan_events_attend">{{ __('Event History') }}</label>
                    <input id="history_mwan_events_attend" type="text" placeholder="Enter Event History " class="form-control{{ $errors->has('history_mwan_events_attend') ? ' is-invalid' : '' }}" name="history_mwan_events_attend" value="{{ $record->history_mwan_events_attend}}" >
                    @if ($errors->has('history_mwan_events_attend'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('history_mwan_events_attend') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
        </div>
    </fieldset>
    <fieldset class="col-md-12" style="background-color:#fff; margin-top:20px;">    	
        <legend>Comments</legend>
          <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="maretingoptns">{{ __('Maretingoptns') }}</label>
                        <input id="maretingoptns" type="text" placeholder="Enter Maretingoptns " class="form-control{{ $errors->has('maretingoptns') ? ' is-invalid' : '' }}" name="maretingoptns" value="{{$record->maretingoptns }}" >
                        @if ($errors->has('maretingoptns'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('maretingoptns') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="col-md-6">
                        <label for="unsubscribes">{{ __('Subscribes') }}</label>
                        <input id="unsubscribes" type="text" placeholder="Enter unsubscribes " class="form-control{{ $errors->has('unsubscribes') ? ' is-invalid' : '' }}" name="unsubscribes" value="{{$record->unsubscribes }}" >
                        @if ($errors->has('unsubscribes'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('unsubscribes') }}</strong>
                            </span>
                        @endif
                    </div>
               </div>
            </div>
            
            <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="form-group row">

                   <div class="col-md-4">
                    <label for="opt_in">{{ __('Date Opts-in') }}</label>
                    <input id="opt_in" type="text" placeholder="Enter Data OPT-INS " class="form-control{{ $errors->has('opt_in') ? ' is-invalid' : '' }}" name="opt_in" value="{{ $record->opt_in }}" >
                    @if ($errors->has('opt_in'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('opt_in') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="col-md-4">
                    <label for="opt_out">{{ __('Date Opts-out') }}</label>
                    <input id="opt_out" type="text" placeholder="Enter Data opt_out " class="form-control{{ $errors->has('opt_out') ? ' is-invalid' : '' }}" name="opt_out" value="{{ $record->opt_out }}" >
                    
                    @if ($errors->has('opt_out'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('opt_out') }}</strong>
                        </span>
                    @endif
                </div> 

                 <div class="col-md-4">
                    <label for="neutral">{{ __('Date neutral') }}</label>
                    <input id="neutral" type="text" placeholder="Enter neutral " class="form-control{{ $errors->has('neutral') ? ' is-invalid' : '' }}" name="neutral" value="{{ $record->neutral }}" >
                    
                    @if ($errors->has('neutral'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('neutral') }}</strong>
                        </span>
                    @endif
                </div> 
                    
                
                    
               </div>
        </div>
        

          <div class="col-md-12 col-lg-12 col-sm-12">
            
            <div class="form-group row">
                <div class="col-md-12 ">
                    <label for="comments">{{ __('Comments') }}</label>
                    <input id="comments" type="textarea" placeholder="Enter Comments " class="form-control{{ $errors->has('comments') ? ' is-invalid' : '' }}" name="comments" value="{{ $record->comments }}" >
                    @if ($errors->has('comments'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('comments') }}</strong>
                        </span>
                    @endif
                </div>

            </div>
        </div>
        </fieldset>
        
        <div class="col-md-12 col-lg-12 col-sm-12" style="margin-top:20px;">
            <div class="form-group row mb-0">
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-lg btn-success " style="float:right ">
                             {{ __('UPDATE') }}
                        </button>
                     </div>
            </div>
        </div>



        </form>
    </div>


<!---------------------------- End Form ------------------------------------------- -->
</div>
 @endsection
 