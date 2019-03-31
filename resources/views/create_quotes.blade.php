@extends('layouts.home')
@section('content')

 <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Edit Profile</h4>
                  <p class="card-category">Complete your profile</p>
                  
                </div>
                <div class="card-body">
                   @if(Session::has('success'))
                        {{ Session::get('success')  }}
                    @endif
                  <form method="post" action="{{ route('submit_quote') }}">
                  @csrf
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">Reference Author</label>
                          <input type="text" class="form-control"  name="author">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <select class="form-control" name="category">
                          <option>Select Category</option>
                          @foreach($data as $getData)
                          <option value="{{ $getData->id }}">{{ $getData->category_name }}</option>
                          @endforeach
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Quote</label>
                          <div class="form-group">
                            <label class="bmd-label-floating"> Quote, Example</label>
                            <textarea class="form-control" rows="5" name="quote"></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Post</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-profile">
              @if(Auth::user()->photopath)
                <div class="card-avatar">
                  <a href="#pablo">
                    <img class="img" src="images/authors/{{ Auth::user()->photopath }}" />
                  </a>
                </div>
                 @else
                <form method="post" action="{{ route('postphoto') }}" enctype="multipart/form-data">  
                  @csrf
                  <input type="file" name="file" /><br /><input type="submit" />
                  </form>
                 @endif 
                <div class="card-body">
                  <h6 class="card-category text-gray">Author</h6>
                  <h4 class="card-title">{{ Auth::user()->name }}</h4>
                  <p class="card-description">
                    Don't be scaredI love Rick Owens’ bed design but the back is...
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
       
      </div>



@endsection
