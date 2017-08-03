
<form class="form-horizontal" action="{{route('log.update',$log->id)}}" method="post">
				<input type="hidden" name="_method" value="PATCH">
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
							
				    		<option>{{$log->type}}</option>
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
					      <input name="title" type="text" class="form-control" id="title" placeholder="Title" value="{{$log->title}}">
					    </div>
					    {!! $errors->first('title','<p class="help-block">:message</p> !!')}
					  </div>
					  <div class="form-group{{($errors->has('how')) ? $errors->first('how') : ''}}">
					    <label for="How" class="col-sm-1 control-label">How :</label>
					    <div class="col-sm-8">
					       <textarea name="how" class="form-control" rows="5" id="How" placeholder="How">{{$log->how}}</textarea>
					    </div>
					    {!! $errors->first('how','<p class="help-block">:message</p> !!')}
					  </div>
					  <button class="btn btn-info" type="submite">Add</button>
						 				 
			

	      </div>
	      <div class="modal-footer">
	  	     <button class="mui-btn mui-btn--primary pull-left" type="submite">Add</button>
	        <button type="button" class="mui-btn mui-btn--danger pull-left" data-dismiss="modal">Close</button>
	        
	      </div>
	    </div>
	  </div>
	</div>
</form>


