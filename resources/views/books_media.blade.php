@extends('front_layouts.master')

@section('content')
        


 <!-- Start: Page Banner -->
        <section class="page-banner services-banner">
            <div class="container">
                <div class="banner-header">
                    <h2>Books & Media Listing</h2>
                    <span class="underline center"></span>
                    <p class="lead">Proin ac eros pellentesque dolor pharetra tempo.</p>
                </div>
                <div class="breadcrumb">
                    <ul>
                        <li><a href="index-2.html">Home</a></li>
                        <li>Books & Media</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End: Page Banner -->

@include('front_includes.search')
						
						<div class="container">

                            <div class="filter-options margin-list">
                                <div class="row">                                            
                                    <div class="col-md-3 col-sm-3">
                                        <select name="orderby">
                                            <option selected="selected">Sort by Title</option>
                                            <option>Sort by popularity</option>
                                            <option>Sort by rating</option>
                                            <option>Sort by newness</option>
                                            <option>Sort by price</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3 col-sm-3">
                                        <select name="orderby">
                                            <option selected="selected">Sort by Author</option>
                                            <option>Sort by popularity</option>
                                            <option>Sort by rating</option>
                                            <option>Sort by newness</option>
                                            <option>Sort by price</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2 col-sm-3">
                                        <select name="orderby">
                                            <option selected="selected">Language</option>
                                            <option>Sort by popularity</option>
                                            <option>Sort by rating</option>
                                            <option>Sort by newness</option>
                                            <option>Sort by price</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2 col-sm-3">
                                        <select name="orderby">
                                            <option selected="selected">Publishing Date</option>
                                            <option>Sort by popularity</option>
                                            <option>Sort by rating</option>
                                            <option>Sort by newness</option>
                                            <option>Sort by price</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2 col-sm-12 pull-right">
                                        <div class="filter-toggle">
                                            <a href="books-media-gird-view-v2.html" class="active"><i class="glyphicon glyphicon-th-large"></i></a>
                                            <a href="books-media-list-view.html"><i class="glyphicon glyphicon-th-list"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="booksmedia-fullwidth">
                                <ul>
                                    @foreach($contents as $content)
                                    <li>
                                        <div class="book-list-icon blue-icon"></div>
                                        <figure>
                                            <a href="books-media-detail-v2.html"><img src="{{ asset('uploads/content_photo') }}/{{$content->content_image}}" alt="Book"></a>
                                            <figcaption>

                                                <header>
                                                    <h4><a href="books-media-detail-v2.html">{{$content->title}}</a></h4>
                                                    <p><strong>Author:</strong> {{$content->author}}</p>
                                                    <p><strong>Call No:</strong>  {{$content->callno}}</p>
                                                    <p><strong>Subject:</strong>  {{$content->subject}}</p>
                                                </header>
                                                <p>{{str_limit($content->description, 160)}}</p>
                                                <div class="actions">
                                                    <ul>
                                                        <li>
                                                            <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Add TO CART">
                                                                <i class="fa fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Like">
                                                                <i class="fa fa-heart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Mail">
                                                                <i class="fa fa-envelope"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Search">
                                                                <i class="fa fa-search"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Print">
                                                                <i class="fa fa-print"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Share">
                                                                <i class="fa fa-share-alt"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </figcaption>
                                        </figure>                                                
                                    </li>
                                                                            
                                   @endforeach
                                </ul>
                            </div>
                            
                        </div>
                        
                    </div>
                </main>
            </div>
        </div>
        <!-- End: Products Section -->

 @include('front_includes.follow')

@endsection