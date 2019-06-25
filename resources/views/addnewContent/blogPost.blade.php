@extends('backend_layouts.master')

@section('content')

<div class="page-wrapper mb-5">
<div class="container">
<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit "></i> New Post</h1>
          <p>write here what is in your mind</p>
        </div>
        
      </div>
      <div class="row">
        <div class="col-md-12 ">
          <div class="tile">
           
           
              <form method="post" action="#">@csrf
                <div class="form-group">
                  <label class="control-label">Title</label>
                  <input name="title" class="form-control" type="text" placeholder="Enter Post Title">
                </div>
                
                <div class="form-group">
                  <label class="control-label">Description</label>
                  <textarea name="content" class="form-control" rows="10" placeholder="Enter your Post Description"></textarea>
                </div>
                <div class="tile-footer">
              <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Save</button>
              &nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
              </div>
              </form>
            </div>
            
          </div>
        </div>
       
        <div class="clearix"></div>
        
      </div>
    </main>
</div>
</div>
@endsection