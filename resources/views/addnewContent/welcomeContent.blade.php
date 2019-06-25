@extends('backend_layouts.master')

@section('content')


<div class="page-wrapper mb-5">
<div class="container">
           		
          
      <form action="{{ url('welcome/post') }}" method="post">@csrf
        <div class="form-group">
          <label for="title">Title</label>
          <input type="title" name="title" class="form-control" id="title"  placeholder="Enter title">
        </div>
       <div class="form-group">
        <label for="content">Content:</label>
        <textarea class="form-control" name="content" rows="10" id="content"></textarea>
      </div> 
        
        <button type="submit" class="btn btn-success">Save</button>
      </form>

</div>
</div>

<div class="page-wrapper">
<div class="container">
              
       <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">sl.</th>
      <th scope="col">Title</th>
      <th scope="col">Content</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($welcomeposts as $welcomepost)
    <tr>
      <th scope="row">{{ $loop->index + 1 }}</th>
      <td>{{ $welcomepost->title }}</td>
      <td>{{ $welcomepost->content }}</td>
      <td>
        <div class="btn-group" role="group" aria-label="Basic example">
          <button type="button" class="btn btn-info">edit</button>
          <button type="button" class="btn btn-danger">delete</button>
          
        </div>
      </td>
    </tr>
   @endforeach
  </tbody>
</table>   


</div>
</div>

@endsection