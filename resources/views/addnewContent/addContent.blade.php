@extends('backend_layouts.master')

@section('content')


           <div class="page-wrapper">
           
            
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <form class="form-horizontal" action="{{ url('newContent/insert') }}" method="post" enctype="multipart/form-data">@csrf
                                <div class="card-body">
                                    <h4 class="card-title">Content Info</h4>

                                    <div class="form-group row">
                                      <label for="fname" class="col-sm-3 text-right control-label col-form-label">Product Category</label>
                                       <select class="form-control col-sm-9" name="category_id">
                                           <option>--Select--</option>
                                           @foreach($categories as $category)
                                           <option value="{{ $category->id }}">{{ $category->category }}</option>
                                           @endforeach
                                       </select>
                                  </div>


                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Title</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="title" class="form-control" id="title" placeholder="enter title Here">
                                        </div>
                                    </div>

                                     <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Author</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="author" class="form-control" id="atuthor" placeholder="enter author Here">
                                        </div>
                                    </div>

                                     <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Subject</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="subject" class="form-control" id="subject" placeholder="enter subject Here">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Call no</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="callno" class="form-control" id="callno" placeholder="enter call no: Here">
                                        </div>
                                    </div>
                                     <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">class No</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="class_no" class="form-control" id="class_no" placeholder="enter class no Here">
                                        </div>
                                    </div>
                                     <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Accession</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="accession" class="form-control" id="accession" placeholder="enter accession Here">
                                        </div>
                                    </div>
                                     <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">publisher</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="publisher" class="form-control" id="publisher" placeholder="enter publisher Here">
                                        </div>
                                    </div>
                                     <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">publish Date</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="publish_date" class="form-control" id="publish_date" placeholder="enter publish date Here">
                                        </div>
                                    </div>

                                     <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">edition</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="edition" class="form-control" id="edition" placeholder="enter edition Here">
                                        </div>
                                    </div>
                                     <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">ISBN</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="isbn" class="form-control" id="isbn" placeholder="enter ISBN Here">
                                        </div>
                                    </div>
                                     <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Status</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="status" class="form-control" id="status" placeholder="enter status Here">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Description</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" name="description" rows="10" id="description"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">content Image</label>
                                        <div class="col-sm-9">
                                            <input type="file" name="content_image" class="form-control" id="content_image">
                                        </div>
                                    </div>



                                   
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </div>
                              </div>
                            </form>
                        </div>

             </div>
             <div class="col-md-12">
            
                  <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">sl</th>
                      <th scope="col">Title</th>
                      <th scope="col">Author</th>
                      <th scope="col">Subject</th>
                      <th scope="col">publisher</th>
                      <th scope="col">Call No</th>
                      <th scope="col">Status</th>
                      <th scope="col">photo</th>
                      <th>
                          Action
                      </th>
                      
                    </tr>
                  </thead>


                       <tbody>
                         @foreach($contents as $content)
                    <tr>
                      <th scope="row">{{ $loop->index + 1 }}</th>
                      <td>{{$content->title}}</td>
                      <td>{{$content->author}}</td>
                      <td>{{$content->subject}}</td>
                      <td>{{$content->publisher}}</td>
                      <td>{{$content->callno}}</td>
                      <td>{{$content->status}}</td>
                      <td>
                        <img class="img-thumbnail" width="80px" src="{{ asset('uploads/content_photo') }}/{{$content->content_image}}" alt="photo not found" >
                      </td>
                      <td>
                          <a href="#" class="btn btn-group btn-sm btn-info">Edit</a>
                           <a href="#" class="btn btn-group btn-danger btn-sm">Delete</a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                  
                 
                </table>

     
             </div>
           
            


  </div>
</div>
@endsection