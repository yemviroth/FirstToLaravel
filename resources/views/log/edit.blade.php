@extends('master')
	@section('content')
	<div class="row">
		<div class="col-md-12">
			
			    <form class="form-horizontal" action="{{route('log.update',$log->id)}}" method="post">
			    	<div class="panel panel-primary">
					  <div class="panel-heading"><h4>Edit</h4></div>
					  <div class="panel-body">
						<input type="hidden" name="_method" value="PATCH">
		        		{{csrf_field()}}

					    <div class="form-group">
					    	<label for="type" class="col-sm-1 control-label">
					    		Type :
					    	</label>
					    	<div class="col-sm-4">
					    		<select class="form-control" name="type">
								
					    		<option>{{$log->type}}</option>
								  <option>Gerneral</option>
								  <option>WEB</option>
								  <option>Programing</option>
								</select>
					    	</div>
					    
					    </div>
						  <div class="form-group">
						    <label for="title" class="col-sm-1 control-label">Title :</label>
						    <div class="col-sm-8">
						      <input name="title" type="text" class="form-control" id="title" placeholder="Title" value="{{$log->title}}">
						    </div>
						   
						  </div>
						  <div class="form-group">
						    <label for="How" class="col-sm-1 control-label">How :</label>
						    <div class="col-sm-8">
						       <textarea name="how" class="form-control" rows="10" id="How" placeholder="How">{{$log->how}}</textarea>
						    </div>
						  
						  </div>
					 </div>	  
						  
					<div class="panel-footer">
						<button class="btn btn-primary" type="submite"><span class="glyphicon glyphicon-ok"> Update</span></button>
						<a href="{{ URL::previous() }}" class="btn btn-danger"><span class="glyphicon glyphicon-eject"> Back</span></a>
					</div>
				</div>		 
			</form>
		</div>
	</div>

@stop