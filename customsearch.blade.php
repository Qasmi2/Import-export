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
        <div class="text-center">
        <h4> Customer search </h4>
        </div>
        
        <section>
            <form method="POST"  action="{{ route('searchname') }}">
               {{ csrf_field() }}
                <div class="col-md-12 col-lg-12 col-sm-12">
                    <div class="form-group row">
                        <div class="col-md-3">
                       
                            <input id="first_name" type="text" placeholder="Seach by First Name " class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" value="{{ old('first_name') }}" >
                            @if ($errors->has('first_name'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('first_name') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div>
                       
                            <button type="submit" class="btn btn-success">
                                {{ __('SEARCH') }}
                            </button>
                        </div>
                    </div>
                </div>  
            </from>
        </section>

            <h1>Show Record</h1>
           
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

            </tbody>


            </table>
        </div>

                 

    </div>


@else
<div>You need to Login to perfrom some actions</div>
@endif



@endsection