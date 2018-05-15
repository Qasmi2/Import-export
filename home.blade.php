@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"> Events Database</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                   
              
                   
                <h3> Wellcome {{ Auth::user()->name }} To the EVENTS DATABASE </h3>
                <a href="{{ URL::to('recordform') }}"><button class="btn btn-success">Add New Record</button></a>
                 <a href="{{ URL::to('importexport') }}"><button class="btn btn-success">Import/Export</button></a>
			     <a href="{{ URL::to('show') }}"><button class="btn btn-success">Display All Record</button></a>
                 
                 <!-- <h3> {{ Auth::user()->name }} You can Register New User Also </h3>
                 <a href="{{ URL::to('/register') }}"><button class="btn btn-success">Register New User</button></a> -->
                 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
