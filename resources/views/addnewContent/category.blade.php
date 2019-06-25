@extends('backend_layouts.master')

@section('content')

<div class="page-wrapper mb-5">
<div class="container">
           		
  <div class="card-body">
        <form action="{{ url('category') }}" method="post" > @csrf

            <div class="form-group">
                <label>Content Category</label>
                <input type="text" class="form-control" id="category"  placeholder="Enter content Category" name="content_category" value="{{ old('content_category') }}">
            </div>
            
            <button type="submit" class="btn btn-info">Add Content Category</button>
        </form>
    </div>
</div>
</div>

<div class="page-wrapper">
<div class="container">
           		
  <div class="card-body">
         <table class="table table-striped">
				  <thead>
				    <tr>
				      <th scope="col">sl.</th>
				      <th scope="col">Category Name</th>
				      <th scope="col">Action</th>
				    </tr>
				  </thead>
				  <tbody>
				    @foreach($categories as $category)
				    <tr>
				      <th scope="row">{{ $loop->index + 1 }}</th>
				      <td>{{ $category->category }}</td>
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
</div>


@endsection