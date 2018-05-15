@extends('layouts.app')
@include('flash')
@section('content')
@if (session('status'))
<div class="alert alert-success">
{{ session('status') }}
</div>
@endif

@if (Auth::check()) 

 
    <div class="container">
        <a href="http://eventsdatabase.mwancloud.com/home" class="btn btn-default">HOME PAGE</a>
               <br/><br/>
               <div class="panel panel-default">
                    <div class="panel-body">
                        <fieldset class="col-md-12">    	
                            <legend>Customer Search</legend>
                            <div class="panel panel-default">
                                <div class="panel-body">
                                   <!-- form -->
                                    <form method="POST"  action="{{ route('searchname') }}">
                                            {{ csrf_field() }}
                                            <div class="col-md-12 col-lg-12 col-sm-12">
                                            <div class="form-group row">
                                                <?php $fname = session('first_name') ?>
                                                <div class="col-md-2">
                                                       
                                                    <label for="first_name">{{ __('Search First Name') }}</label>
                                                    <input id="first_name" type="text" placeholder="Seach First Name " class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" value="{{ $fname }}" >
                                                    @if ($errors->has('first_name'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('first_name') }}</strong>
                                                        </span>
                                                    @endif

                                                </div>
                                                <?php $sname = session('sur_name') ?>
                                                <div class="col-md-2">
                                                <label for="sur_name">{{ __('Search Sur Name') }}</label>    
                                                    <input id="sur_name" type="text" placeholder="Seach Sur Name " class="form-control{{ $errors->has('sur_name') ? ' is-invalid' : '' }}" name="sur_name" value="{{ $sname }}" >
                                                    @if ($errors->has('sur_name'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('sur_name') }}</strong>
                                                        </span>
                                                    @endif

                                                </div>
                                                <?php $emailW = session('email_work') ?>
                                                <div class="col-md-2">
                                                    <label for="email_work">{{ __('Search Email Work') }}</label>
                                                    <input id="email_work" type="text" placeholder="Seach Email Work " class="form-control{{ $errors->has('email_work') ? ' is-invalid' : '' }}" name="email_work" value="{{$emailW}}" >
                                                    @if ($errors->has('email_work'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('email_work') }}</strong>
                                                        </span>
                                                    @endif

                                                </div>
                                                <?php $positionSelected = session('position') ?>
                                                <div class="col-md-2">
                                                    <label for="position">{{ __('Search Position') }}</label>
                                                    <!-- <input id="position" type="text" placeholder="Seach position " class="form-control{{ $errors->has('position') ? ' is-invalid' : '' }}" name="position" value="{{ old('position') }}" > -->
                                                    <select class="form-control" name="position" id="position" >
                                                        <option value="">Select Position</option>
                                                        @if(count($positionlist ) > 0)
                                                            @foreach($positionlist as $post)
                                                                <option value="{{$post->position}}"<?php echo $post->position==$positionSelected?"selected":""?>>{{$post->position}}</option>
                                                            @endforeach
                                                        @endif
                                                      
                                                    </select>
                                                    @if ($errors->has('position'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('position') }}</strong>
                                                        </span>
                                                    @endif

                                                </div>
                                                <?php $countrySelected = session('country') ?>
                                                <div class="col-md-2">
                                                    <label for="country">{{ __('Search Country') }}</label>
                                                    <!-- <input id="position" type="text" placeholder="Seach country " class="form-control{{ $errors->has('country') ? ' is-invalid' : '' }}" name="country" value="{{ old('country') }}" > -->
                                                    <select class="form-control" name="country" id="country" >
                                                        <option value="">Select Country</option>
                                                        @if(count($countrylist ) > 0)
                                                            @foreach($countrylist as $post)
                                                                <option value="{{$post->country}}" <?php echo $post->country==$countrySelected?"selected":""?>>{{$post->country}}</option>
                                                            @endforeach
                                                        @endif
                                                      
                                                    </select>
                                                    @if ($errors->has('country'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('country') }}</strong>
                                                        </span>
                                                    @endif

                                                </div>
                                             

                                                <?php $eventselected = session('event_name') ?>
                                                <div class="col-md-2">
                                                    <label for="event_name">{{ __('Search Event Name') }}</label>
                                                    <!-- <input id="event_name" type="text" placeholder="Seach Event Name " class="form-control{{ $errors->has('event_name') ? ' is-invalid' : '' }}" name="event_name" value="{{ old('event_name') }}" > -->
                                                    <select class="form-control" name="event_name" id="event_name" >
                                                        <option value="">Select Event Name</option>
                                                        
                                                        @if(count($eventlist ) > 0)
                                                            @foreach($eventlist as $post)
                                                                <option value="{{$post->event_name}}"<?php echo $post->event_name==$eventselected?"selected":""?>> {{$post->event_name}}</option>
                                                            @endforeach
                                                        @endif
                                                      
                                                    </select>
                                                    @if ($errors->has('event_name'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('event_name') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>

                                            </div>
                                            
                                            
                                            <div class="form-group row">
                                                <?php $eventdateselected = session('event_date') ?>
                                                <div class="col-md-2">
                                                <label for="event_date">{{ __('Search Event Date') }}</label>
                                                    <input id="event_date" type="text" placeholder="Seach Event Date " class="form-control{{ $errors->has('event_date') ? ' is-invalid' : '' }}" name="event_date" value="{{ $eventdateselected }}" >
                                                    @if ($errors->has('event_date'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('event_date') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                <?php $nature_of_businessSelected = session('nature_of_business') ?>
                                                <div class="col-md-2">
                                                <label for="nature_of_business">{{ __('Nature Of Business') }}</label>
                                                    <!-- <input id="nature_of_business" type="text" placeholder="Seach Nature Of Business " class="form-control{{ $errors->has('nature_of_business') ? ' is-invalid' : '' }}" name="nature_of_business" value="{{ old('nature_of_business') }}" > -->
                                                    <select class="form-control" name="nature_of_business" id="nature_of_business" >
                                                        <option value="">Select Nature of Business</option>
                                                        @if(count($nature_of_business_list ) > 0)
                                                            @foreach($nature_of_business_list as $post)
                                                                <option value="{{$post->nature_of_business}}" <?php echo $post->nature_of_business==$nature_of_businessSelected?"selected":""?>>{{$post->nature_of_business}}</option>
                                                            @endforeach
                                                        @endif
                                                      
                                                    </select>
                                                    @if ($errors->has('nature_of_business'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('nature_of_business') }}</strong>
                                                        </span> 
                                                    @endif
                                                </div> 
                                                <?php $mobileselected = session('mobile_number') ?>
                                                <div class="col-md-2">
                                                <label for="mobile_number">{{ __('Search Mobile No.') }}</label>
                                                    <input id="mobile_number" type="text" placeholder="Seach Mobile No. " class="form-control{{ $errors->has('mobile_number') ? ' is-invalid' : '' }}" name="mobile_number" value="{{ $mobileselected}}" >
                                                    @if ($errors->has('mobile_number'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('mobile_number') }}</strong>
                                                        </span> 
                                                    @endif
                                                </div> 

                                            </div>
                                            </div>
                                            <input type="hidden" name="action" value="search">
                                            <!-- <div class="form-group row"> -->
                                         
                                               <a href="{{url('show')}}" class="btn btn-success" style="margin-left:15px;"> Clear fields </a>
                                                <button type="submit" class="btn btn-success" style="margin-left:15px;">
                                                    {{ __('SEARCH') }}
                                                </button>    
                                            <!-- </div>      -->
                                    </from>
                                   <!-- End form -->
                                </div>
                            </div>
                        </fieldset>				
                        <div class="clearfix"></div>
                    </div>    
                </div>
      
        <!-- unset Session variables -->
       
        <!-- javaScript delete confirmation -->

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
        <!-- End JavaScript code -->
       
        <!---------------------------------- show record------------------------------------------------- -->
      
            <div class="text-center">
                <h2> Show Records </h2>
            </div>
            {{$record->links()}}
        <div class="table-responsive " >
            <table class="table table-bordered table-striped table-hover">

            <thead bgcolor="#fff" >
                                                    <tr>
                                                        <th>Title</th>
                                                        <th>First Name</th>
                                                        <th>Middle Name</th>
                                                        <th>SurName</th>
                                                        <th>Position</th>
                                                        <th>Departement</th>
                                                        <th>Company</th>
                                                        <th>Address1</th>
                                                        <th>Address2</th>
                                                        <th>City</th>
                                                        <th>Post Code</th>
                                                        <th>State</th>
                                                        <th>Country</th>
                                                        <th>Telephone Country</th>
                                                        <!-- <th>Area Code</th> -->
                                                        <th>Telephone</th>
                                                        <th>Extension</th>
                                                        <th>Facsimile Country</th>
                                                        <!-- <th>Facsimile Area</th> -->
                                                        <th>Facsimile</th>
                                                        <th>Mobile Country</th>
                                                        <th>Mobile Number</th>
                                                        <th>Mobile Country(2)</th>
                                                        <th>MObile Number (2)</th>
                                                        <th>Email Work</th>
                                                        <th>Private Email</th>
                                                        <th>Email</th>
                                                        <th>Company Website</th>
                                                        <th>Age Group</th>
                                                        <th>Nationality</th>
                                                        <th>Nature of Business</th>
                                                        <th>Category</th>
                                                        <th>Event ID</th>
                                                        <th>Event Name</th>
                                                        <th>Event Date</th>
                                                        <th> Mareting OPT-INS</th>
                                                        <!-- <th>Event History</th> -->
                                                        <th>Comments</th>
                                                        <th>Unsubscribes</th>
                                                        <th>Actions </th>
                                                    
                                                    </tr>
            </thead>
            <tbody bgcolor="#fff">
     
                                                
            @if(count($record ) > 0)
                @foreach($record as $post)
                        <tr>
                        <td> {{$post->title}}</td>
                        <td> {{$post->first_name}}</td>
                        <td> {{$post->middle_name}}</td>
                        <td> {{$post->sur_name}}</td>
                        <td>{{$post->position}} </td>
                        <td>{{$post->department}} </td>
                        <td>{{$post->company}} </td>
                        <td> {{$post->address1}}</td>
                        <td> {{$post->address2}}</td>
                        <td> {{$post->city}}</td>
                        <td> {{$post->post_code}}</td>
                        <td> {{$post->state}}</td>
                        <td> {{$post->country}}</td>
                        <td> {{$post->telephone_country}}</td>
                        <!-- <td> {{$post->telephone_area}}</td> -->
                        <td> {{$post->telephone}}</td>
                        <td> {{$post->extention}}</td>
                        <td> {{$post->facsimile_country}}</td>
                        <!-- <td> {{$post->facsimile_area}}</td> -->
                        <td> {{$post->facsimile}}</td>
                        <td> {{$post->mobile_area}}</td>
                        <td> {{$post->mobile_number}}</td>
                        <td> {{$post->mobile_area_2}}</td>
                        <td> {{$post->mobile_number_2}}</td>
                        <td> {{$post->email_work}}</td>
                        <td> {{$post->email_private}}</td>
                        <td> {{$post->email}}</td>
                        <td> {{$post->company_website}}</td>
                        <td> {{$post->age_group}}</td>
                        <td> {{$post->nationality}}</td>
                        <td> {{$post->nature_of_business}}</td>
                        <td> {{$post->category}}</td>
                        <td> {{$post->event_id}}</td>
                        <td> {{$post->event_name}}</td>
                        <td> {{$post->event_date}}</td>
                        <td> {{$post->maretingoptns}}</td>
                        <!-- <td> {{$post->history_mwan_events_attend}}</td> -->
                        <td>{{$post->comments}}</td>
                        <td>{{$post->unsubscribes}}</td>
                        <td>
                            <a href="{{ url('editing/'.$post->id)}}" class="btn btn-link">Edit</a> 
                          
                            <a href="{{ url('delete/'.$post->id) }}" data-confirm="Are you sure you want to delete?" class="btn btn-danger">Delete</a>
                            
                        </td>
                     
                        
                        </tr>
                @endforeach
                @else
                <p>No posts found</p>
            @endif

            </tbody>


            </table>
        </div>

                    {{$record->links()}}

    </div>

<script>
function myFunction() {
    document.getElementById("myForm").reset();
}
</script>
@else
<div>You need to Login to perfrom some actions</div>
@endif
@endsection