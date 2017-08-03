@extends('master')
	@section('content')

	<div class="row">
		<div class="col-md-12">
			
		
		
		
				<button type="submit" class="btn btn-info" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-plus"> Add</span></button>
				<form class="navbar-form navbar-right" role="search" action="log" method="GET">
				
				  <div class="form-group">
				  	  <input type="text" class="form-control" placeholder="Search" name="search">
				  </div>
				  <div class="col-md-6"">
				  		<div class="input-group">
						  <input name="date" placeholder="Search for Date Crate" type="text" class="form-control datepicker"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
						</div>
					</div>
				  <button type="submit" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-search"></span></button>
				</form>
			
								
		
			
			
				
			
		
			
		
		
		
	


		<!-- Modal Add -->

<form class="form-horizontal" action="{{route('log.store')}}" method="post">
	{{csrf_field()}}		
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">Add New</h4>
	      </div>
	      <div class="modal-body">
	        	

					    <!-- <div class="form-group{{($errors->has('type')) ? $errors->first('type') : ''}}">
				    	<label for="type" class="col-sm-1 control-label">
				    		Type :
				    	</label>
				    	<div class="col-sm-4">
				    		<select class="form-control" name="type">
							  <option>Gerneral</option>
							  <option>WEB</option>
							  <option>Programing</option>
							</select>
				    	</div>
				    	{!! $errors->first('type','<p class="help-block">:message</p> !!')}
				    </div>
					  <div class="form-group{{($errors->has('title')) ? $errors->first('title') : ''}}">
					    <label for="title" class="col-sm-1 control-label">Title :</label>
					    <div class="col-sm-8">
					      <input name="title" type="text" class="form-control" id="title" placeholder="Title" required>
					    </div>
					    {!! $errors->first('title','<p class="help-block">:message</p> !!')}
					  </div>
					  <div class="form-group{{($errors->has('how')) ? $errors->first('how') : ''}}">
					    <label for="How" class="col-sm-1 control-label">How :</label>
					    <div class="col-sm-8">
					       <textarea name="how" class="form-control" rows="5" id="How" placeholder="How"></textarea>
					    </div>
					    {!! $errors->first('how','<p class="help-block">:message</p> !!')}
					  </div> -->
					  <div class="form-group">
				    	<label for="type" class="col-sm-1 control-label">
				    		Type :
				    	</label>
				    	<div class="col-sm-4">
				    		<select class="form-control" name="type">
							  <option>Gerneral</option>
							  <option>WEB</option>
							  <option>Programing</option>
							</select>
				    	</div>
				    	
				    </div>
					  <div class="form-group">
					    <label for="title" class="col-sm-1 control-label">Title :</label>
					    <div class="col-sm-8">
					      <input name="title" type="text" class="form-control" id="title" placeholder="Title" required>
					    </div>
					 
					  </div>
					  <div class="form-group">
					    <label for="How" class="col-sm-1 control-label">How :</label>
					    <div class="col-sm-8">
					       <textarea name="how" class="form-control" rows="5" id="How" placeholder="How"></textarea>
					    </div>
					  
					  </div>
						 				 
			

	      </div>
	      <div class="modal-footer">
	  	     <button class="mui-btn mui-btn--primary pull-left" type="submite"><span class="glyphicon glyphicon-ok"> Add</span></button>
	        <button type="button" class="mui-btn mui-btn--danger pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"> Close</slapn></button>
	        
	      </div>
	    </div>
	  </div>
	</div>
</form>


<!-- modal edit -->
<!-- <form class="form-horizontal" action="{{route('log.store')}}" method="post">
	{{csrf_field()}}		
	<div class="modal fade" id="myModaledit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">Add New</h4>
	      </div>
	      <div class="modal-body">
	        	

					    <div class="form-group{{($errors->has('type')) ? $errors->first('type') : ''}}">
				    	<label for="type" class="col-sm-1 control-label">
				    		Type :
				    	</label>
				    	<div class="col-sm-4">
				    		<select class="form-control" name="type">
							  <option>Gerneral</option>
							  <option>WEB</option>
							  <option>Programing</option>
							</select>
				    	</div>
				    	{!! $errors->first('type','<p class="help-block">:message</p> !!')}
				    </div>
					  <div class="form-group{{($errors->has('title')) ? $errors->first('title') : ''}}">
					    <label for="title" class="col-sm-1 control-label">Title :</label>
					    <div class="col-sm-8">
					      <input name="title" type="text" class="form-control" id="title" placeholder="Title">
					    </div>
					    {!! $errors->first('title','<p class="help-block">:message</p> !!')}
					  </div>
					  <div class="form-group{{($errors->has('how')) ? $errors->first('how') : ''}}">
					    <label for="How" class="col-sm-1 control-label">How :</label>
					    <div class="col-sm-8">
					       <textarea name="how" class="form-control" rows="5" id="How" placeholder="How"></textarea>
					    </div>
					    {!! $errors->first('how','<p class="help-block">:message</p> !!')}
					  </div>
						 				 
			

	      </div>
	      <div class="modal-footer">
	  	  
	      </div>
	    </div>
	  </div>
	</div>
</form> -->

<!-- end modal edit -->



<!-- modal find -->
<div class="modal fade" id="myModalFind" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Find</h4>
      </div>
      <div class="modal-body">
        	<form class="form-horizontal">

				    <div class="form-group">
				    	<label for="type" class="col-sm-1 control-label">
				    		Type :
				    	</label>
				    	<div class="col-sm-4">
				    		<select class="form-control">
							  <option>Gerneral</option>
							  <option>WEB</option>
							  <option>Programing</option>
							  
							</select>
				    	</div>
				    </div>
					  <div class="form-group">
					    <label for="title" class="col-sm-1 control-label">Title :</label>
					    <div class="col-sm-8">
					      <input type="text" class="form-control" id="title" placeholder="Title">
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="How" class="col-sm-1 control-label">How :</label>
					    <div class="col-sm-8">
					       <textarea class="form-control" rows="5" id="How" placeholder="How"></textarea>
					    </div>
					  </div>
					  

			</form>
      </div>
      <div class="modal-footer">
  	    <button type="submit" class="mui-btn mui-btn--primary pull-left">Find</button>
        <button type="button" class="mui-btn mui-btn--danger pull-left" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>


				@if(Session::has('message'))
					<div class="alert alert-info alert-dismissible" data-auto-dismiss role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					  
					  <strong>{{ Session::get('message') }}</strong>
				
				    	
					</div>
				@endif

			
			
			
				<table class="table table-bordered">
					<thead>
						<tr class="bg-primary">
		 					<th>#</th>
		 					<th>Type</th>
		 					<th>Title</th>
		 					<th>How</th>
		 					<th>Add Date</th>
		 					<th>Update</th>
		 					<th class="col-sm-1">Status</th>
		 				</tr>
		 				<?php $no=1;?>
		 			</thead>
		 			@foreach($logs as $log)
		 			
		 			@if($log->type=='WEB')
					<tr class="bg-danger">
						@else <tr>
		 			 @endif
					
	 					<td>{{$no++}}</td>
	 					<td>{{$log->type}}</td>
	 					<td class="col-md-3">{{$log->title}}</td>
	 					<td class="col-md-4">{{$log->how}}</td>
	 					<td>{{$log->created_at->todatestring()}}</td>
	 					<td>{{$log->updated_at->todatestring()}}</td>
	 					<td  class="col-sm-1"> 


	 						<form action="{{route('log.destroy',$log->id)}}" method="post">
	 							<input type="hidden" name="_method" value="delete">
	 							<input type="hidden" name="_token" value="{{ csrf_token() }}">
	 							<a class="btn btn-primary btn-sm" href="{{route('log.edit',$log->id)}}" data-toggle="modal" data-target=""><span 
	 							class="glyphicon glyphicon-pencil"></span></a>
	 							<!-- <a data-toggle="modal" href="http://fiddle.jshell.net/bHmRB/51/show/" data-target="#myModaledit">Click me !</a> -->
	 							<button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('are you sure to delete this data?');"><span class="glyphicon glyphicon-trash"></span></button>
	 						</form>
	 						
	 						
	 					</td>
 					</tr>
 					@endforeach
 					
 					
				</table>
				<hr>
				
		</div>
	</div>
	



<script>
window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 2000);

$('.datepicker').datepicker({
    format: 'yyyy-mm-dd',
    startDate: '-3d',
    autoclose: true
});



</script>


	@stop
