
@extends('layouts.app')
@include('flash')
@section('content')
						@if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            
                            </div>
                        @endif
<!-- <div>You need to Login to perfrom some actions</div> -->
<div class="container">
    <a href="http://eventsdatabase.mwancloud.com/home" class="btn btn-default">HOME PAGE</a>
	<br/><br/>
	@if (Auth::check()) 
	  
		
			<a href="{{ URL::to('downloadexcel/xls') }}"><button class="btn btn-success">Download Excel xls</button></a>
			<a href="{{ URL::to('downloadexcel/xlsx') }}"><button class="btn btn-success">Download Excel xlsx</button></a>

	
			<a href="{{ URL::to('downloadexcel/csv') }}"><button class="btn btn-success">Download CSV</button></a>
		
			<form style="border: 5px solid #2ab27b;margin-top: 15px;padding: 15px;" action="{{ URL::to('importexcel') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}
			
			<label>Please choose a CSV file</label>
				<input type="file" name="import_file" class="btn btn-success"/>
				<br/>
				<button class="btn btn-success">Import File</button>
			</form>
		</div>
	@else
	
		<div>You need to Login to perfrom some actions</div>
	
	@endif
	
    @endsection