@extends('master')
	@section('content')
	<div class="row">
		<div class="col-md-12">
			<form class="form-horizontal" action="{{route('log.store')}}" method="post">
        		{{csrf_field()}}

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
					  <button class="btn btn-info" type="submite">Add</button>
					 
			</form>
		</div>
	</div>

@stop