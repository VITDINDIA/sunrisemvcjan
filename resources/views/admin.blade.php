@extends('layouts.admin')
@section('content')
<div class="container-fluid">   
          <div class="row">
            <div class="col-md-12">
              <div class="card card-chart">
                <div class="card-body">
                  <h4 class="card-title">Latest Quotes</h4>
                  <p class="card-category">
                  <table class="table table-striped">
    <thead>
      <tr>
        <th>Srno</th>
        <th>Quote</th>
        <th>Category</th>
        <th>Author</th>
        <th>Created At</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    <?php   $i=1;    ?>
    @foreach($data as $getData)
      <tr>
        <td>{{ $i }}</td>
        <td>{{ $getData->quote }}</td>
        <td>{{ $getData->category->category_name }}</td>
        <td>{{ $getData->user->name }}</td>
        <td>{{ $getData->created_at }}</td>
        <td><a href="{{ route('allow_quote',['id' => $getData->id,  ]) }}">Allow</a></td>
      </tr>
      <?php   $i++;  ?>
    @endforeach
    </tbody>
  </table>
  <ul class="pager">
                  @if($data->currentPage() !== 1)
                    <li><a href="{{ $data->previousPageUrl() }}">Previous</a></li>
                  @endif
                  @if($data->currentPage() !== $data->lastPage() && $data->hasPages())
                    <li><a href="{{ $data->nextPageUrl() }}">Next</a></li>
                  @endif
                  </ul>            
                          
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">access_time</i> updated 4 minutes ago
                  </div>
                </div>
              </div>
            </div>
            
            
            
          </div>
          
        </div>
@endsection
