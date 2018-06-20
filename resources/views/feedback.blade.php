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
            <a href="http://eventsdatabase.mwancloud.com/show" class="btn btn-default">Custom Search</a>
           
            <div class="text-center">
                <div class="alert alert-success">
                    <h1>Successfull deleted Record</h1>
                </div>
            </div>
            <hr>   
        </div>
    </div> 
       
@endsection