@extends('layouts.app')
@include('flash')
@section('content')
	@if (session('status'))
       <div class="alert alert-success">
           {{ session('status') }}                   
        </div>
    @endif
<!------------------------------ From -------------------------------------------- -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->

    <div id="app">
    <div class="container">
    <a href="http://eventsdatabase.mwancloud.com/home" class="btn btn-default">HOME PAGE</a>
        <div class="text-center">
        <h1>ADD NEW RECORD</h1>
        </div>
        <hr>    
        <form method="POST"  action="{{ route('addrecord') }}">
        {{ csrf_field() }}
        <!-- <div class="col-md-12 col-lg-12 col-sm-12">
            <div class="form-group row">
                <div class="col-md-12">
                <label for="title">{{ __('Title') }}</label>
                    <input id="title" type="text" placeholder="Enter Title " class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ old('title') }}" >
                    @if ($errors->has('title'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('title') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
        </div> -->

            <div class="col-md-12 col-lg-12 col-sm-12">
            
                <div class="form-group row">

                    <div class="col-md-3">
                        <label for="title">{{ __('Title') }}</label>
                        <!-- <input id="title" type="text" placeholder="Enter Title " class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ old('title') }}" > -->
                        <select class="form-control" name="title" id="title" >
                            <option value="">Select Title</option>
                            <option value="Capt.">Capt.</option>
                            <option value="Chef">Chef</option>
                            <option value="Col.">Col.</option>
                            <option value="Dr.">Dr.</option>
                            <option value="Eng.">Eng.</option>
                            <option value="Gov.">Gov.</option>
                            <option value="H.E">H.E</option>
                            <option value="H.H.">H.H.</option> 
                            <option value="H.R.H.">H.R.H.</option>
                            <option value="Hon.">Hon.</option>
                            <option value="Lt.">Lt.</option>
                            <option value="Maj.">Maj.</option>
                            <option value="Mr.">Mr.</option>
                            <option value="Mrs.">Mrs.</option>
                            <option value="Ms.">Ms.</option>
                            <option value="Prof.">Prof.</option>
                            <option value="Sheikh">Sheikh</option>
                            <option value="Sheikha">Sheikha</option> 
                            <option value="Sir.">Sir.</option>
                            <option value="Brig.">Brig.</option>
                            <option value="Gen.">Gen.</option>
                            <option value="Adm.">Adm.</option>
                            <option value="Amb.">Amb.</option>
                            <option value="Amb.">Amb.</option>
                            <option value="Brig Gen.">Brig Gen.</option>
                          
                      


                        </select>
                        @if ($errors->has('title'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('title') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="col-md-3 ">
                        <label for="title">{{ __('First Name') }}</label>
                        <input id="first_name" type="text" placeholder="Enter First Name " class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" value="{{ old('first_name') }}" required>
                        @if ($errors->has('first_name'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('first_name') }}</strong>
                            </span>
                        @endif
                    </div>

                   
                    <div class="col-md-3">
                        <label for="title">{{ __('SurName') }}</label>
                        <input id="sur_name" type="text" placeholder="Enter SurName " class="form-control{{ $errors->has('sur_name') ? ' is-invalid' : '' }}" name="sur_name" value="{{ old('sur_name') }}" >
                        @if ($errors->has('sur_name'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('sur_name') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="col-md-3">
                        <label for="title">{{ __('Middle Name') }}</label>
                        <input id="middle_name" type="text" placeholder="Enter Middle Name " class="form-control{{ $errors->has('middle_name') ? ' is-invalid' : '' }}" name="middle_name" value="{{ old('middle_name') }}" >
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
                    <input id="position" type="text" placeholder="Enter Position " class="form-control{{ $errors->has('position') ? ' is-invalid' : '' }}" name="position" value="{{ old('position') }}" >
                    @if ($errors->has('position'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('position') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="col-md-4">
                    <label for="title">{{ __('Company') }}</label>
                    <input id="company" type="text" placeholder="Enter Company " class="form-control{{ $errors->has('company') ? ' is-invalid' : '' }}" name="company" value="{{ old('company') }}" >
                    @if ($errors->has('company'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('company') }}</strong>
                        </span>
                    @endif
                </div>

                 <div class="col-md-4">
                    <label for="department">{{ __('Department') }}</label>
                    <input id="department" type="text" placeholder="Enter department " class="form-control{{ $errors->has('department') ? ' is-invalid' : '' }}" name="department" value="{{ old('department') }}" >
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
                    <div class="col-md-6">
                        <label for="address1">{{ __('Address1') }}</label>
                        <input id="address1" type="text" placeholder="Enter Address1 " class="form-control{{ $errors->has('address1') ? ' is-invalid' : '' }}" name="address1" value="{{ old('address1') }}" >
                        @if ($errors->has('address1'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('address1') }}</strong>
                            </span>
                        @endif
                    </div>
                    
                
                    <div class="col-md-6 ">
                        <label for="address2">{{ __('Address2') }}</label>
                        <input id="address2" type="text" placeholder="Enter Address2 " class="form-control{{ $errors->has('address2') ? ' is-invalid' : '' }}" name="address2" value="{{ old('address2') }}" >
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
                    <input id="first_name" type="text" placeholder="Enter City " class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" value="{{ old('city') }}" >
                    @if ($errors->has('city'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('city') }}</strong>
                        </span>
                    @endif
                </div>

               
                <div class="col-md-3">
                    <label for="post_code">{{ __('Post_Code') }}</label>
                    <input id="post_code" type="text" placeholder="Enter post_code " class="form-control{{ $errors->has('post_code') ? ' is-invalid' : '' }}" name="post_code" value="{{ old('post_code') }}" >
                    @if ($errors->has('post_code'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('post_code') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="col-md-3">
                    <label for="state">{{ __('State') }}</label>
                    <input id="state" type="text" placeholder="Enter state " class="form-control{{ $errors->has('state') ? ' is-invalid' : '' }}" name="state" value="{{ old('state') }}" >
                    @if ($errors->has('state'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('state') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="col-md-3">
                    <label for="country">{{ __('Country') }}</label>
                    <input id="country" type="text" placeholder="Enter country " class="form-control{{ $errors->has('country') ? ' is-invalid' : '' }}" name="country" value="{{ old('country') }}" >
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
                    <label for="telephone_country">{{ __('Telephone Country') }}</label>
                    <input id="telephone_country" type="text" placeholder="Enter telephone_country " class="form-control{{ $errors->has('telephone_country') ? ' is-invalid' : '' }}" name="telephone_country" value="{{ old('telephone_country') }}" >
                    @if ($errors->has('telephone_country'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('telephone_country') }}</strong>
                        </span>
                    @endif
                </div>

               
                <!-- <div class="col-md-3">
                    <label for="telephone_area">{{ __('telephone Area') }}</label>
                    <input id="telephone_area" type="text" placeholder="Enter telephone_area " class="form-control{{ $errors->has('telephone_area') ? ' is-invalid' : '' }}" name="telephone_area" value="{{ old('telephone_area') }}" >
                    @if ($errors->has('telephone_area'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('telephone_area') }}</strong>
                        </span>
                    @endif
                </div> -->

                <div class="col-md-4">
                    <label for="telephone">{{ __('Telephone') }}</label>
                    <input id="telephone" type="text" placeholder="Enter telephone " class="form-control{{ $errors->has('telephone') ? ' is-invalid' : '' }}" name="telephone" value="{{ old('telephone') }}" >
                    @if ($errors->has('telephone'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('telephone') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="col-md-4">
                    <label for="extention">{{ __('Extention') }}</label>
                    <input id="extention" type="text" placeholder="Enter extention " class="form-control{{ $errors->has('extention') ? ' is-invalid' : '' }}" name="extention" value="{{ old('extention') }}" >
                    @if ($errors->has('extention'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('extention') }}</strong>
                        </span>
                    @endif
                </div>

            </div>
        </div>
        <!-- <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="address1">{{ __('Address1') }}</label>
                        <input id="address1" type="text" placeholder="Enter Address1 " class="form-control{{ $errors->has('address1') ? ' is-invalid' : '' }}" name="address1" value="{{ old('address1') }}" >
                        @if ($errors->has('address1'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('address1') }}</strong>
                            </span>
                        @endif
                    </div>
                    
                
                    <div class="col-md-6 ">
                        <label for="address2">{{ __('Address2') }}</label>
                        <input id="address2" type="text" placeholder="Enter Address2 " class="form-control{{ $errors->has('address2') ? ' is-invalid' : '' }}" name="address2" value="{{ old('address2') }}" >
                        @if ($errors->has('address2'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('address2') }}</strong>
                            </span>
                        @endif
                    </div>
               </div>
        </div> -->
        <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="facsimile_country">{{ __('Facsimile Country') }}</label>
                        <input id="facsimile_country" type="text" placeholder="Enter facsimile_country " class="form-control{{ $errors->has('facsimile_country') ? ' is-invalid' : '' }}" name="facsimile_country" value="{{ old('facsimile_country') }}" >
                        @if ($errors->has('facsimile_country'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('facsimile_country') }}</strong>
                            </span>
                        @endif
                    </div>
                    
                
                    <div class="col-md-6 ">
                        <label for="facsimile">{{ __('Facsimile') }}</label>
                        <input id="facsimile" type="text" placeholder="Enter facsimile " class="form-control{{ $errors->has('facsimile') ? ' is-invalid' : '' }}" name="facsimile" value="{{ old('facsimile') }}" >
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
                    <label for="mobile_area">{{ __('Mobile Country') }}</label>
                    <input id="mobile_area" type="text" placeholder="Enter mobile country " class="form-control{{ $errors->has('mobile_area') ? ' is-invalid' : '' }}" name="mobile_area" value="{{ old('mobile_area') }}" required>
                    @if ($errors->has('mobile_area'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('mobile_area') }}</strong>
                        </span>
                    @endif
                </div>

               
                <div class="col-md-4">
                    <label for="mobile_number">{{ __('Mobile Number') }}</label>
                    <input id="mobile_number" type="text" placeholder="Enter mobile_number " class="form-control{{ $errors->has('mobile_number') ? ' is-invalid' : '' }}" name="mobile_number" value="{{ old('mobile_number') }}" required>
                    @if ($errors->has('mobile_number'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('mobile_number') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="col-md-2">
                    <label for="mobile_area_2">{{ __('Mobile Country (2)') }}</label>
                    <input id="mobile_area_2" type="text" placeholder="Enter Mobile country " class="form-control{{ $errors->has('mobile_area_2') ? ' is-invalid' : '' }}" name="mobile_area_2" value="{{ old('mobile_area_2') }}" >
                    @if ($errors->has('mobile_area_2'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('mobile_area_2') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="col-md-4">
                    <label for="mobile_number_2">{{ __('Mobile Number (2)') }}</label>
                    <input id="mobile_number_2" type="text" placeholder="Enter Mobile Number (opt) " class="form-control{{ $errors->has('mobile_number_2') ? ' is-invalid' : '' }}" name="mobile_number_2" value="{{ old('mobile_number_2') }}" >
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
                    <input id="email_work" type="text" placeholder="Enter Email Work " class="form-control{{ $errors->has('email_work') ? ' is-invalid' : '' }}" name="email_work" value="{{ old('email_work') }}" >
                    @if ($errors->has('email_work'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('email_work') }}</strong>
                        </span>
                    @endif
                </div>

               
                <div class="col-md-3">
                    <label for="email_private">{{ __('Private Email') }}</label>
                    <input id="email_private" type="text" placeholder="Enter Email Private " class="form-control{{ $errors->has('email_private') ? ' is-invalid' : '' }}" name="email_private" value="{{ old('email_private') }}" >
                    @if ($errors->has('email_private'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('email_private') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="col-md-3">
                    <label for="email">{{ __('Email') }}</label>
                    <input id="email" type="text" placeholder="Enter email " class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="col-md-3">
                    <label for="company_website">{{ __('Company Website') }}</label>
                    <input id="company_website" type="text" placeholder="Enter Company Website " class="form-control{{ $errors->has('company_website') ? ' is-invalid' : '' }}" name="company_website" value="{{ old('company_website') }}" >
                    @if ($errors->has('company_website'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('company_website') }}</strong>
                        </span>
                    @endif
                </div>

            </div>
        </div>

         <div class="col-md-12 col-lg-12 col-sm-12">
         <div class="form-group row">
            <div class="col-md-3">
                    <label for="age_group">{{ __('AGE Group') }}</label>
                    <select class="form-control" name="age_group" id="age_group" >
                            <option value="">Select Age Group</option>
                            <option value="15-24">15-24</option>
                            <option value="25-34">25-34</option>
                            <option value="35-44">35-44</option>
                            <option value="45-54">45-54</option>
                            <option value="55-64">55-64</option>
                            <option value="65+">65+</option>
                    </select>
                    @if ($errors->has('age_group'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('age_group') }}</strong>
                        </span>
                    @endif
            </div> 
            
                <div class="col-md-3 ">
                    <label for="nationality">{{ __('Nationality') }}</label>
                    <input id="nationality" type="text" placeholder="Enter Nationality " class="form-control{{ $errors->has('nationality') ? ' is-invalid' : '' }}" name="nationality" value="{{ old('nationality') }}" >
                    @if ($errors->has('nationality'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('nationality') }}</strong>
                        </span>
                    @endif
                </div>

               
                <div class="col-md-3">
                    <label for="nature_of_business">{{ __('Nature Of Business') }}</label>
                    <input id="nature_of_business" type="text" placeholder="Enter Nature Of Business " class="form-control{{ $errors->has('nature_of_business') ? ' is-invalid' : '' }}" name="nature_of_business" value="{{ old('nature_of_business') }}" >
                    @if ($errors->has('nature_of_business'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('nature_of_business') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="col-md-3">
                    <label for="category">{{ __('Category') }}</label>
                    <input id="category" type="text" placeholder="Enter category " class="form-control{{ $errors->has('category') ? ' is-invalid' : '' }}" name="category" value="{{ old('category') }}" >
                    @if ($errors->has('category'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('category') }}</strong>
                        </span>
                    @endif
                </div>
               

            </div>
        </div>
        <div class="col-md-12 col-lg-12 col-sm-12">
            
            <div class="form-group row">
                <div class="col-md-4 ">
                    <label for="event_id">{{ __('Event ID') }}</label>
                    <input id="event_id" type="text" placeholder="Enter Event ID " class="form-control{{ $errors->has('event_id') ? ' is-invalid' : '' }}" name="event_id" value="{{ old('event_id') }}" >
                    @if ($errors->has('event_id'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('event_id') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="col-md-4 ">
                    <label for="event_name">{{ __('Event Name') }}</label>
                    <input id="event_name" type="text" placeholder="Enter Event Name " class="form-control{{ $errors->has('event_name') ? ' is-invalid' : '' }}" name="event_name" value="{{ old('event_name') }}" >
                    @if ($errors->has('event_name'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('event_name') }}</strong>
                        </span>
                    @endif
                </div>

                 <div class="col-md-4 ">
                    <label for="event_date">{{ __('Event Date') }}</label>
                    <input id="event_date" type="text" placeholder="Enter Event Date " class="form-control{{ $errors->has('event_date') ? ' is-invalid' : '' }}" name="event_date" value="{{ old('event_date') }}" >
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

                   <div class="col-md-6">
                    <label for="maretingoptns">{{ __('MARETING OPT-INS') }}</label>
                    <input id="maretingoptns" type="text" placeholder="Enter MARETING OPT-INS " class="form-control{{ $errors->has('maretingoptns') ? ' is-invalid' : '' }}" name="maretingoptns" value="{{ old('maretingoptns') }}" >
                    @if ($errors->has('maretingoptns'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('maretingoptns') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="col-md-6">
                    <label for="unsubscribes">{{ __('Subscribes News') }}</label>
                    <!-- <input id="history_mwan_events_attend" type="text" placeholder="Enter history_mwan_events_attend " class="form-control{{ $errors->has('history_mwan_events_attend') ? ' is-invalid' : '' }}" name="history_mwan_events_attend" value="{{ old('history_mwan_events_attend') }}" > -->
                    <select class="form-control" name="unsubscribes" id="unsubscribes" >
                            <option value="">Select Title</option>
                            <option value="subscribes.">Subscribes</option>
                            <option value="unsubscribes">Unsubscribes</option>
                           
                    </select>
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
                <div class="col-md-12 ">
                    <label for="comments">{{ __('Comments') }}</label>
                    <input id="comments" type="textarea" placeholder="Enter Comments " class="form-control{{ $errors->has('comments') ? ' is-invalid' : '' }}" name="comments" value="{{ old('comments') }}" >
                    @if ($errors->has('comments'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('comments') }}</strong>
                        </span>
                    @endif
                </div>

            </div>
        </div>
        <br>
        <div class="col-md-12 col-lg-12 col-sm-12">
            <div class="form-group row mb-0">
                    <div class="col-md-6 ">
                        <button type="submit" class="btn btn-lg btn-success" style="float:right ">
                             {{ __('Submit') }}
                        </button>
                     </div>
            </div>
        </div>



        </form>
    </div>


<!---------------------------- End Form ------------------------------------------- -->
</div>
 @endsection
 