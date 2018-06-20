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
                            <legend style="background-color: #ffffff !important; color:black !important">Customer Search</legend>
                            <div class="panel panel-default">
                                <div class="panel-body">
                                   <!-- form -->
                                    <form autocomplete="nope" method="POST"  action="{{ route('searchname') }}" autocomplete="off">
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
                                                <label for="sur_name">{{ __('Search Surname') }}</label>    
                                                    <input id="sur_name" type="text" placeholder="Seach Surname " class="form-control{{ $errors->has('sur_name') ? ' is-invalid' : '' }}" name="sur_name" value="{{ $sname }}" >
                                                    @if ($errors->has('sur_name'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('sur_name') }}</strong>
                                                        </span>
                                                    @endif

                                                </div>
                                                <!-- <?php $emailW = session('email_work') ?> -->
                                                <!-- <div class="col-md-2">
                                                    <label for="email_work">{{ __('Search Email') }}</label>
                                                    <input id="email_work" type="text" placeholder="Seach Email " class="form-control{{ $errors->has('email_work') ? ' is-invalid' : '' }}" name="email_work" value="{{$emailW}}" >
                                                    @if ($errors->has('email_work'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('email_work') }}</strong>
                                                        </span>
                                                    @endif

                                                </div> -->
                                                <?php $positionSelected = session('position') 

                                                ?>
                                                <!-- <div class="col-md-2">
                                                    <label for="position">{{ __('Search Position') }}</label>
                                                  
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

                                                </div> -->
                                                
                                                <?php $positionSelected = session('position') ?>
                                                <?php 
                                                    $position = array();
                                                    if(count($positionlist ) > 0)
                                                    {
                                                        foreach($positionlist as $post)
                                                        {
                                                        
                                                            $position[]  = $post->position;
                                                            
                                                        }
                                                               
                                                    }
                                                   
                                                    // $myJSON = json_encode($position);
                                                    // echo $myJSON; 
                                                   
                                                    
                                                   ?>
                                                   <script>  
                                                        <?php 
                                                           
                                                            $code_array = json_encode($position);
                                                        ?>  
                                                        var array_code = <?php echo $code_array; ?>;
                                                        // alert(array_code);
                                                        
                                                    </script>
                                                 
                                               
                                                <div class="col-md-2">
                                                    <label for="position">{{ __('Search Position') }}</label>
                                                    <input id="myInput" type="text" placeholder="Seach position " class="form-control{{ $errors->has('position') ? ' is-invalid' : '' }}" name="position" value="{{$positionSelected}}" >
                                                  
                                                </div>
                                                

                                                <?php $companySelected = session('company')?>

                                                <div class="col-md-2">
                                                    <label for="company">{{ __('Company') }}</label>
                                                    <input id="company" data-provide="company" autocomplete="off" type="text" placeholder="Seach company " class="form-control{{ $errors->has('company') ? ' is-invalid' : '' }}" name="company" value="{{$companySelected}}" >
                                                </div> 

                                                <!-- <div class="col-md-2">
                                                <label for="company">{{ __('Company') }}</label> -->
                                                    <!-- <input id="nature_of_business" type="text" placeholder="Seach Nature Of Business " class="form-control{{ $errors->has('nature_of_business') ? ' is-invalid' : '' }}" name="nature_of_business" value="{{ old('nature_of_business') }}" > -->
                                                    <!-- <select class="form-control" name="company" id="company" >
                                                        <option value="">Select Company</option>
                                                        @if(count($company_list ) > 0)
                                                            @foreach($company_list as $post)
                                                                <option value="{{$post->company}}" <?php echo $post->company==$companySelected?"selected":""?>>{{$post->company}}</option>
                                                            @endforeach
                                                        @endif
                                                      
                                                    </select>
                                                    @if ($errors->has('company'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('company') }}</strong>
                                                        </span> 
                                                    @endif
                                                </div>  -->


                                                
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
                                             

                                                <!-- // <?php $eventselected = session('event_name') ?>
                                                // <div class="col-md-2">
                                                //     <label for="event_name">{{ __('Search Event Name') }}</label>
                                                   
                                                //     <select class="form-control" name="event_name" id="event_name" >
                                                //         <option value="">Select Event Name</option>
                                                        
                                                //         @if(count($eventlist ) > 0)
                                                //             @foreach($eventlist as $post)
                                                //                 <option value="{{$post->event_name}}"<?php echo $post->event_name==$eventselected?"selected":""?>> {{$post->event_name}}</option>
                                                //             @endforeach
                                                //         @endif
                                                      
                                                //     </select>
                                                //     @if ($errors->has('event_name'))
                                                //         <span class="invalid-feedback">
                                                //             <strong>{{ $errors->first('event_name') }}</strong>
                                                //         </span>
                                                //     @endif
                                                // </div> -->

                                            </div>
                                            
                                            
                                            <div class="form-group row">

                                                
                                                <?php $mobileselected = session('mobile_number') ?>
                                                <!-- <div class="col-md-2">
                                                <label for="mobile_number">{{ __('Search Mobile No.') }}</label>
                                                    <input id="mobile_number" type="text" placeholder="Seach Mobile No. " class="form-control{{ $errors->has('mobile_number') ? ' is-invalid' : '' }}" name="mobile_number" value="{{ $mobileselected}}" >
                                                    @if ($errors->has('mobile_number'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('mobile_number') }}</strong>
                                                        </span> 
                                                    @endif
                                                </div>  -->
                                                
                                                <?php $emailW = session('email_work') ?>
                                                <div class="col-md-2">
                                                    <label for="email_work">{{ __('Search Email') }}</label>
                                                    <input id="email_work" type="text" placeholder="Seach Email " class="form-control{{ $errors->has('email_work') ? ' is-invalid' : '' }}" name="email_work" value="{{$emailW}}" >
                                                    @if ($errors->has('email_work'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('email_work') }}</strong>
                                                        </span>
                                                    @endif

                                                </div>

                                                <?php $eventdateselected = session('event_date') ?>
                                                <!-- <div class="col-md-2">
                                                <label for="event_date">{{ __('Search Event Date') }}</label>
                                                    <input id="event_date" type="text" placeholder="Seach Event Date " class="form-control{{ $errors->has('event_date') ? ' is-invalid' : '' }}" name="event_date" value="{{ $eventdateselected }}" >
                                                    @if ($errors->has('event_date'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('event_date') }}</strong>
                                                        </span>
                                                    @endif
                                                </div> -->
                                                


                                                <?php $eventIDSelected = session('event_id') ?>
                                                <div class="col-md-2">
                                                <label for="event_id">{{ __('Event ID') }}</label>
                                                    <!-- <input id="nature_of_business" type="text" placeholder="Seach Nature Of Business " class="form-control{{ $errors->has('nature_of_business') ? ' is-invalid' : '' }}" name="nature_of_business" value="{{ old('nature_of_business') }}" > -->
                                                    <select class="form-control" name="event_id" id="event_id" >
                                                        
                                                        <option value="">Select Event ID</option>
                                                        <option value="GCC-Dubai-17" <?php echo "GCC-Dubai-17"==$eventIDSelected?"selected":""?>>GCC-Dubai-17</option>
                                                        <option value="GCC-Dubai-18" <?php echo "GCC-Dubai-18"==$eventIDSelected?"selected":""?>>GCC-Dubai-18</option> 
                                                        <option value="PRC-Cairo-17" <?php echo "PRC-Cairo-17"==$eventIDSelected?"selected":""?>>PRC-Cairo-17</option> 
                                                        <option value="PRC-Cairo-18" <?php echo "PRC-Cairo-18"==$eventIDSelected?"selected":""?>>PRC-Cairo-18</option> 
                                                        <option value="eCTD-Dubai-APR-17" <?php echo "eCTD-Dubai-APR-17"==$eventIDSelected?"selected":""?>>eCTD-Dubai-APR-17</option> 
                                                        <option value="eCTD-Dubai-Sep-17" <?php echo "eCTD-Dubai-Sep-17"==$eventIDSelected?"selected":""?>>eCTD-Dubai-Sep-17</option> 
                                                        <option value="eCTD-Cairo-17" <?php echo "eCTD-Cairo-17"==$eventIDSelected?"selected":""?>>eCTD-Cairo-17</option> 
                                                        <option value="eCTD-Dubai-Mar-18" <?php echo "eCTD-Dubai-Mar-18"==$eventIDSelected?"selected":""?>>eCTD-Dubai-Mar-18</option> 
                                                        <option value="MSC-Dubai-18" <?php echo "MSC-Dubai-18"==$eventIDSelected?"selected":""?>>MSC-Dubai-18</option> 
                                                        <option value="PV-Dubai-APR-17" <?php echo "PV-Dubai-APR-17"==$eventIDSelected?"selected":""?>>PV-Dubai-APR-17</option> 
                                                        <option value="PV-Dubai-Mar-18" <?php echo "PV-Dubai-Mar-18"==$eventIDSelected?"selected":""?>>PV-Dubai-Mar-18</option> 
                                                                        
                                                    
                                                        <!-- @if(count($event_id_list ) > 0)
                                                            @foreach($event_id_list as $post)
                                                                <option value="{{$post->event_id}}" <?php echo $post->event_id==$eventIDSelected?"selected":""?>>{{$post->event_id}}</option>
                                                            @endforeach
                                                        @endif -->
                                                     
                                                      
                                                    </select>
                                                    @if ($errors->has('nature_of_business'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('nature_of_business') }}</strong>
                                                        </span> 
                                                    @endif
                                                </div> 

                                                 <?php $eventselected = session('event_name') ?>
                                                <div class="col-md-2">
                                                    <label for="event_name">{{ __('Search Event Name') }}</label>
                                                    <!-- <input id="event_name" type="text" placeholder="Seach Event Name " class="form-control{{ $errors->has('event_name') ? ' is-invalid' : '' }}" name="event_name" value="{{ old('event_name') }}" > -->
                                                    <select class="form-control" name="event_name" id="event_name" >
                                                        <option value="">Select Event Name</option>

                                                          
                                                            <option value="GCC Pharma Regulatory Summit 2017" <?php echo "GCC Pharma Regulatory Summit 2017"==$eventselected?"selected":""?>>GCC Pharma Regulatory Summit 2017 </option>
                                                            <option value="GCC Pharma Regulatory Summit 2018" <?php echo "GCC Pharma Regulatory Summit 2018"==$eventselected?"selected":""?>> GCC Pharma Regulatory Summit 2018 </option> 
                                                            <option value="Egypt Pharma Regulatory Conference 2017" <?php echo "Egypt Pharma Regulatory Conference 2017"==$eventselected?"selected":""?>>Egypt Pharma Regulatory Conference 2017  </option> 
                                                            <option value="Egypt Pharma Regulatory Conference 2018" <?php echo "Egypt Pharma Regulatory Conference 2018"==$eventselected?"selected":""?>>Egypt Pharma Regulatory Conference 2018  </option> 
                                                            <option value="eCTD Training, September 2017" <?php echo "eCTD Training, September 2017"==$eventselected?"selected":""?>>eCTD Training, September 2017 </option> 
                                                            <option value="eCTD Training, September 2017" <?php echo "eCTD Training, September 2017"==$eventselected?"selected":""?>>eCTD Training, September 2017 </option> 
                                                            <option value="eCTD Training Dubai 2018" <?php echo "eCTD Training Dubai 2018" ==$eventselected?"selected":""?>>eCTD Training Dubai 2018</option> 
                                                            <option value="eCTD Training, October 2017" <?php echo "eCTD Training, October 2017"==$eventselected?"selected":""?>>eCTD Training, October 2017 </option> 
                                                            <option value="Medication Safety Conference 2018" <?php echo "Medication Safety Conference 2018"==$eventselected?"selected":""?>>Medication Safety Conference 2018</option> 
                                                            <option value="Pharmacovigilance training 2017" <?php echo "Pharmacovigilance training 2017"==$eventselected?"selected":""?>>Pharmacovigilance training 2017</option> 
                                                            <option value="Pharmacovigilance training 2018" <?php echo "Pharmacovigilance training 2018"==$eventselected?"selected":""?>>Pharmacovigilance training 2018 </option> 
                                                        <!-- @if(count($eventlist ) > 0)
                                                            @foreach($eventlist as $post)
                                                                <option value="{{$post->event_name}}"<?php echo $post->event_name==$eventselected?"selected":""?>> {{$post->event_name}}</option>
                                                            @endforeach
                                                        @endif -->
                                                      
                                                    </select>
                                                    @if ($errors->has('event_name'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('event_name') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>

                                                 <?php $eventdateselected = session('event_data') ?>
                                                 <div class="col-md-2">
                                                    <label for="event_date">{{ __('Search Event Date') }}</label>
                                                
                                                    <select class="form-control" name="event_date" id="event_date" >
                                                        <option value="">Select Event Date</option>

                                                            <option value="10-11 April 2017" <?php echo "10-11 April 2017"==$eventdateselected?"selected":""?>> 10-11 April 2017</option>
                                                            <option value="14-15 March 2018" <?php echo "14-15 March 2018"==$eventdateselected?"selected":""?>> 14-15 March 2018 </option> 
                                                            <option value="15-16 October 2017" <?php echo "15-16 October 2017"==$eventdateselected?"selected":""?>>15-16 October 2017</option> 
                                                            <option value="14-16 October 2018" <?php echo "14-16 October 2018"==$eventdateselected?"selected":""?>> 14-16 October 2018 </option> 
                                                            <option value="9 April 2017" <?php echo "9 April 2017"==$eventdateselected?"selected":""?>>9 April 2017 </option> 
                                                            <option value="27-28 September 2017" <?php echo "27-28 September 2017"==$eventdateselected?"selected":""?>>27-28 September 2017 </option> 
                                                            <option value="17 October 2017" <?php echo "17 October 2017"==$eventdateselected?"selected":""?>>17 October 2017  </option> 
                                                            <option value="13 March 2018" <?php echo "13 March 2018"==$eventdateselected?"selected":""?>>13 March 2018  </option> 
                                                            <option value="11 March 2018" <?php echo "11 March 2018"==$eventdateselected?"selected":""?>>11 March 2018 </option> 
                                                            <option value="12-13 April 2017" <?php echo "12-13 April 2017"==$eventdateselected?"selected":""?>> 12-13 April 2017  </option> 
                                                            <option value="12-13 March 2018" <?php echo "12-13 March 2018"==$eventdateselected?"selected":""?>>12-13 March 2018 </option> 

                                                        <!-- @if(count($event_date_list ) > 0)
                                                            @foreach($event_date_list as $post)
                                                                <option value="{{$post->event_date}}"<?php echo $post->event_date==$eventdateselected?"selected":""?>> {{$post->event_date}}</option>
                                                            @endforeach
                                                        @endif -->
                                                      
                                                    </select>
                                                    @if ($errors->has('event_name'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('event_name') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                <!-- <div class="col-md-2">
                                                <label for="event_date">{{ __('Search Event Date') }}</label>
                                                    <input id="event_date" type="text" placeholder="Seach Event Date " class="form-control{{ $errors->has('event_date') ? ' is-invalid' : '' }}" name="event_date" value="{{ $eventdateselected }}" >
                                                    @if ($errors->has('event_date'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('event_date') }}</strong>
                                                        </span>
                                                    @endif
                                                </div> -->

                                                <!-- <?php $nature_of_businessSelected = session('nature_of_business') ?> -->
                                                <!-- <div class="col-md-2">
                                                <label for="nature_of_business">{{ __('Nature Of Business') }}</label>
                                                  
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
                                                </div>  -->
                                                

                                                 <!-- <?php $companySelected = session('company') ?> -->
                                                <!-- <div class="col-md-2">
                                                <label for="company">{{ __('Company') }}</label>
                                                
                                                    <select class="form-control" name="company" id="company" >
                                                        <option value="">Select Company</option>
                                                        @if(count($company_list ) > 0)
                                                            @foreach($company_list as $post)
                                                                <option value="{{$post->company}}" <?php echo $post->company==$companySelected?"selected":""?>>{{$post->company}}</option>
                                                            @endforeach
                                                        @endif
                                                      
                                                    </select>
                                                    @if ($errors->has('company'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('company') }}</strong>
                                                        </span> 
                                                    @endif
                                                </div>  -->




                                                <?php $mobileselected = session('mobile_number') ?>
                                                <!-- <div class="col-md-2">
                                                <label for="mobile_number">{{ __('Search Mobile No.') }}</label>
                                                    <input id="mobile_number" type="text" placeholder="Seach Mobile No. " class="form-control{{ $errors->has('mobile_number') ? ' is-invalid' : '' }}" name="mobile_number" value="{{ $mobileselected}}" >
                                                    @if ($errors->has('mobile_number'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('mobile_number') }}</strong>
                                                        </span> 
                                                    @endif
                                                </div>  -->
                                                
                                                <?php $emailW = session('email_work') ?>
                                                <!-- <div class="col-md-2">
                                                    <label for="email_work">{{ __('Search Email') }}</label>
                                                    <input id="email_work" type="text" placeholder="Seach Email " class="form-control{{ $errors->has('email_work') ? ' is-invalid' : '' }}" name="email_work" value="{{$emailW}}" >
                                                    @if ($errors->has('email_work'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('email_work') }}</strong>
                                                        </span>
                                                    @endif

                                                </div> -->

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
            <div style="float: right;">
                
                <a href="{{ URL::to('downloadcvs/xls') }}"><button class="btn btn-success">Download Excel xls</button></a>
                <a href="{{ URL::to('downloadcvs/xlsx') }}"><button class="btn btn-success">Download Excel xlsx</button></a>
                <a href="{{ URL::to('downloadcvs/csv') }}"><button class="btn btn-success">Download CSV</button></a>
            </div>
            

            <div class="text-center">
                <br>
                <h2> Show Records </h2>
              
            </div>
            {{$record->links()}}
            <div>
                <h5>Note :   To Dispaly Complete Recored , Click on First Name</h5>
            </div>
       <!-- Modal -->
<!-- <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div> -->
        <div class="table-responsive " >
            <table class="table table-bordered table-striped table-hover">

            <thead bgcolor="#fff" >
                                                    <tr>
                                                        <th>Title</th>
                                                        <th>First Name</th>
                                                        <th>Middle Name</th>
                                                        <th>Surname</th>
                                                        <th>Position</th>
                                                        <th>Departement</th>
                                                        <th>Company</th>
                                                        <th>Address1</th>
                                                        <th>Address2</th>
                                                        <th>City</th>
                                                        <th>Post Code</th>
                                                        <th>State</th>
                                                        <th>Country</th>
                                                        <th>Country Code</th>
                                                        <!-- <th>Area Code</th> -->
                                                        <th>Telephone</th>
                                                        <th>Extension</th>
                                                        <th>Country Code (2)</th>
                                                        <th>Telephone (2)</th>
                                                        <th>Extension (2)</th>
                                                        <th>Facsimile Country</th>
                                                        <!-- <th>Facsimile Area</th> -->
                                                        <th>Facsimile</th>
                                                        <th>Mobile Country</th>
                                                        <th>Mobile Number</th>
                                                        <th>Mobile Country(2)</th>
                                                        <th>Mobile Number (2)</th>
                                                        <th>Email Work</th>
                                                        <th>Private Email</th>
                                                        <th>Email</th>
                                                        <th>Company Website</th>
                                                        <th>Age Group</th>
                                                        <th>Gender</th>
                                                        <th>Nationality</th>
                                                        <th>Nature of Business</th>
                                                        <th>Category</th>
                                                        <th>Event ID</th>
                                                        <th>Event Name</th>
                                                        <th>Event Date</th>
                                                        <th>Event Place</th>
                                                        <th> Marketing OPT-INS</th>
                                                        <th> Date OPT-IN</th>
                                                        <th> Date OPT-OUT</th>
                                                        <th> Data neutral</th>
                                                        <th>Event History</th>
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
                        <td>  <a href="{{ url('modelview/'.$post->id)}}" class="btn btn-link">{{$post->first_name}}</a></td> 
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
                        <td> {{$post->telephone_country_2}}</td>
                        <td> {{$post->telephone_2}}</td>
                        <td> {{$post->extention_2}}</td>
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
                        <td> {{$post->gender}}</td>
                        <td> {{$post->nationality}}</td>
                        <td> {{$post->nature_of_business}}</td>
                        <td> {{$post->category}}</td>
                        <td> {{$post->event_id}}</td>
                        <td> {{$post->event_name}}</td>
                        <td> {{$post->event_date}}</td>
                        <td> {{$post->event_place}}</td>
                        <td> {{$post->maretingoptns}}</td>
                        <td> {{$post->opt_in}}</td>
                        <td> {{$post->opt_out}}</td>
                        <td> {{$post->neutral}}</td>
                        <td> {{$post->history_mwan_events_attend}}</td>
                        <td>{{$post->comments}}</td>
                        <td>{{$post->unsubscribes}}</td>
                        <td>
                            <a href="{{ url('editing/'.$post->id)}}" class="btn btn-link">Edit</a> 
                            <a href="{{ url('delete/'.$post->id) }}" data-confirm="Are you sure you want to delete?" class="btn btn-danger">Delete</a>
                            <br>
                            <a href="{{ url('downloadsingle/'.$post->id)}}" class="btn btn-link">download</a>
                            
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