@extends('layouts.app')
@include('flash')
@section('content')
    @if (session('status'))
        <div class="alert alert-success">
             {{ session('status') }}
        </div>
    @endif



    <div id="app">
        <div class="container">
        <a href="http://eventsdatabase.mwancloud.com/home" class="btn btn-default">HOME PAGE</a>
            <div class="text-center">
                <h1>CUMSTOM SEARCH</h1>
            </div>
            <!-- searching form -->
            <form method="POST"  action="{{ route('searchname') }}">
                {{ csrf_field() }}
                <!-- searching by Name -->
                <div class="col-md-12 col-lg-12 col-sm-12">
                    <div class="form-group row">
                        <div class="col-md-10">
                        <label for="title">{{ __('SEARCH BY FIRST NAME') }}</label>
                            <input id="first_name" type="text" placeholder="Seach by First Name " class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" value="{{ old('first_name') }}" >
                            @if ($errors->has('first_name'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('first_name') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="col-md-2" style="margin-top: 23px;">
                       
                            <button type="submit" class="btn btn-lg btn-success disabled">
                                {{ __('SEARCH') }}
                            </button>
                        </div>
                    </div>
                 </div>         
                 <!-- searching by Email -->
                 <div class="col-md-12 col-lg-12 col-sm-12">
                    <div class="form-group row">
                        <div class="col-md-10">
                        <label for="email">{{ __('SEARCH BY Email') }}</label>
                            <input id="email" type="text" placeholder="Seach by Email " class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" >
                            @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="col-md-2" style="margin-top: 23px;">
                       
                            <button type="submit" class="btn btn-lg btn-success">
                                {{ __('SEARCH') }}
                            </button>
                        </div>
                    </div>
                 </div>    
                    <!-- search by Event Name -->
                 <div class="col-md-12 col-lg-12 col-sm-12">
                    <div class="form-group row">
                        <div class="col-md-10">
                        <label for="event_name">{{ __('SEARCH By Event_Name') }}</label>
                            <input id="event_name" type="text" placeholder="Seach event_name " class="form-control{{ $errors->has('event_name') ? ' is-invalid' : '' }}" name="event_name" value="{{ old('event_name') }}" >
                            @if ($errors->has('event_name'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('event_name') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="col-md-2" style="margin-top: 23px;">
                       
                            <button type="submit" class="btn btn-lg btn-success disabled">
                                {{ __('SEARCH') }}
                            </button>
                        </div>
                    </div>
                 </div>  
                  <!-- search by every ID -->
                  <div class="col-md-12 col-lg-12 col-sm-12">
                    <div class="form-group row">
                        <div class="col-md-10">
                        <label for="event_id">{{ __('SEARCH By Event_ID') }}</label>
                            <input id="event_id" type="text" placeholder="Seach by event_ID " class="form-control{{ $errors->has('event_id') ? ' is-invalid' : '' }}" name="event_id" value="{{ old('event_id') }}" >
                            @if ($errors->has('event_id'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('event_id') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="col-md-2" style="margin-top: 23px;">
                       
                            <button type="submit" class="btn btn-lg btn-success">
                                {{ __('SEARCH') }}
                            </button>
                        </div>
                    </div>
                 </div>  
                <!-- searching by country and company -->
                <div class="text-center" style="margin:30px;">
                
                    <h3 >Country and Position  SEARCH</h3>
                 </div>
                
                <div class="col-md-12 col-lg-12 col-sm-12">
                    <div class="form-group row">
                        <div class="col-md-5">
                        <label for="country">{{ __('SEARCH Country and Position') }}</label>
                            <input id="country" type="text" placeholder="Enter Country " class="form-control{{ $errors->has('country') ? ' is-invalid' : '' }}" name="country" value="{{ old('country') }}" >
                            @if ($errors->has('country'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('country') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="col-md-5">
                        <label for="position">{{ __('SEARCH Country and Position') }}</label>
                            <input id="position" type="text" placeholder="Enter position " class="form-control{{ $errors->has('position') ? ' is-invalid' : '' }}" name="position" value="{{ old('position') }}" >
                            @if ($errors->has('position'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('position') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="col-md-2" style="margin-top: 23px;">
                       
                            <button type="submit" class="btn btn-lg btn-success">
                                {{ __('SEARCH') }}
                            </button>
                        </div>
                    </div>
                 </div>  
                <!-- searching event Name and first name -->
                
                <div class="text-center" style="margin:30px;">
                
                    <h3 >First Name and Event Name  SEARCH</h3>
                 </div>
                <div class="col-md-12 col-lg-12 col-sm-12">
                    <div class="form-group row">
                        <div class="col-md-5">
                        <label for="first_name">{{ __('SEARCH first Name and Event ID') }}</label>
                            <input id="first_name" type="text" placeholder="Enter first_name " class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" value="{{ old('first_name') }}" >
                            @if ($errors->has('first_name'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('first_name') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="col-md-5">
                        <label for="event_name">{{ __('SEARCH By Event_Name') }}</label>
                            <input id="event_name" type="text" placeholder="Seach event_name " class="form-control{{ $errors->has('event_name') ? ' is-invalid' : '' }}" name="event_name" value="{{ old('event_name') }}" >
                            @if ($errors->has('event_name'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('event_name') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="col-md-2" style="margin-top: 23px;">
                       
                            <button type="submit" class="btn btn-lg btn-success">
                                {{ __('SEARCH') }}
                            </button>
                        </div>
                    </div>
                 </div>      
            </form>
        </div>
    </div>

@endsection
