@extends('layouts.index')

@section('content')
<div class="container-wrap">
		<div id="fh5co-events">
		<h2>Horizontal form</h2>
  <form class="form-horizontal" action="/action_page.php">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" required=""  placeholder="Enter name" name="uname">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Contact:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" required=""   placeholder="Enter contact" name="contact">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Query:</label>
      <div class="col-sm-10">
      <textarea  class="form-control" name="query" required=""  ></textarea>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>	
				
		</div>
	</div><!-- END container-wrap -->
@endsection